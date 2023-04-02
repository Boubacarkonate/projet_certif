<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationMetiersaideconseilController extends AbstractController
{
    #[Route('/presentation/metiers/aide_conseil', name: 'app_presentation_metiers_aideconseil')]
    public function index(): Response
    {
        return $this->render('presentation_metiersaideconseil/index.html.twig', [
            'controller_name' => 'PresentationMetiersaideconseilController',
        ]);
    }
}
