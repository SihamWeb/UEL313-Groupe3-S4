<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PasswordUpdateType;


class PasswordUpdateController extends AbstractController
{
    #[Route('/password/update', name: 'app_password_update')]
    public function updatePassword(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(PasswordUpdateType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPasswordData = $form->get('newPassword')->getViewData();

            $newPassword = $newPasswordData['first'];
            $confirmNewPassword = $newPasswordData['second'];

            if ($newPassword !== $confirmNewPassword) {
                $this->addFlash('danger', 'Les saisies ne correspondent pas.');
            }

            $hashedPassword = $passwordEncoder->encodePassword($user, $newPassword);

            $user->setPassword($hashedPassword);

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            $this->addFlash('success', 'Mot de passe mis à jour avec succès.');
        }

        return $this->render('user/password_update/index.html.twig', [
            'passwordUpdateForm' => $form->createView(),
        ]);
    }
}
