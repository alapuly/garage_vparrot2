<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Cars;
use App\Form\CarAdType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function CarAd(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Cars = new Cars();
        $form = $this->createForm(CarAdType::class, $Cars);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($Cars);
            $entityManager->flush();

            return $this->redirectToRoute('app_shop');
        }

        return $this->render('profile/index.html.twig', [
            'CarAd' => $form,
        ]);
    }
}
