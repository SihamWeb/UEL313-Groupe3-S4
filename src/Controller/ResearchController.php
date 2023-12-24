<?php

namespace App\Controller;

use App\Repository\LienRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ResearchController extends AbstractController
{
    #[Route('/research', name: 'app_research', methods: ['POST'])]
    public function search(Request $request, LienRepository $lienRepository): Response
    {      
        $word = $request->request->get('Keywords', '');

        $query = $lienRepository->createQueryBuilder('p')
            ->where('CONCAT(p.lien_titre, p.lien_desc) LIKE :word')
            ->setParameter('word', '%' . $word . '%')
            ->getQuery();

        $results = $query->getResult();

        return $this->render('research/index.html.twig', [
            'liens' => $results,
            'query' => $word,
        ]);
    }
}