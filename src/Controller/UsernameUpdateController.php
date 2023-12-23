<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UsernameUpdateType;

class UsernameUpdateController extends AbstractController
{
    #[Route('/username/update', name: 'app_username_update')]
    public function updateUsername(Request $request): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(UsernameUpdateType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            if ($formData['newUsername'] !== $formData['confirmNewUsername']) {
                $this->addFlash('danger', 'Les saisies ne correspondent pas.');
                return $this->redirectToRoute('app_username_update');
            }

            $user->setUsername($formData['newUsername']);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            $this->addFlash('success', 'Nom d\'utilisateur mis à jour avec succès.');
        }

        return $this->render('user/username_update/index.html.twig', [
            'usernameUpdateForm' => $form->createView(),
        ]);
    }

}
