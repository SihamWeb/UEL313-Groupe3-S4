<?php

namespace App\Controller;

use App\Repository\LienRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#use Doctrine\ORM\Tools\Pagination\Paginator;

use App\Entity\Lien;
use App\Form\Lien1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;



#[Route('/lien')]
class LienController extends AbstractController
{
    #[Route('/', name: 'app_lien_index', methods: ['GET'])]
    public function index(LienRepository $lienRepository, Request $request, PaginatorInterface $paginator): Response
    {
    
    $pagination = $paginator->paginate(
    	$lienRepository->paginationQuery(), 
    	$request->query->get('page', 1), 1
     );
    
        return $this->render('lien/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    #[Route('/new', name: 'app_lien_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $lien = new Lien();
        $form = $this->createForm(Lien1Type::class, $lien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($lien);
            $entityManager->flush();

            return $this->redirectToRoute('app_lien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lien/new.html.twig', [
            'lien' => $lien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lien_show', methods: ['GET'])]
    public function show(Lien $lien): Response
    {
        return $this->render('lien/show.html.twig', [
            'lien' => $lien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_lien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lien $lien, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Lien1Type::class, $lien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_lien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lien/edit.html.twig', [
            'lien' => $lien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lien_delete', methods: ['POST'])]
    public function delete(Request $request, Lien $lien, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lien->getId(), $request->request->get('_token'))) {
            $entityManager->remove($lien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_lien_index', [], Response::HTTP_SEE_OTHER);
    }
}
