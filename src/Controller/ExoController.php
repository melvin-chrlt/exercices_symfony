<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExoController extends AbstractController
{
    #[Route('/', name: 'app_exo')]
    public function index(): Response
    {
        return $this->render('exo/index.html.twig', [
            'controller_name' => 'ExoController',
        ]);
    }

    #[Route('/random', name: 'app_exo_random')]
    public function random(): Response
    {
        $max = 900;
        $chiffre = rand(0,$max);

        return $this->render('exo/random.html.twig', [
            'max' => $max,
            'chiffre' => $chiffre,
        ]);
        
        return $this->render('_footer.html.twig', [
            'max' => $max,
            'chiffre' => $chiffre,
        ]);
    }
    
    #[Route('/data', name: 'app_exo_data')]
    public function data(): Response
    {
        $max = 900;
        $chiffre = rand(0,$max);
        
        return $this->render('exo/random.html.twig', [
            'max' => $max,
            'chiffre' => $chiffre,
        ]);
    }

    // #[Route('/data', name: 'app_exo_data')]
    // public function displayAction() {
    // $data = $this->getDoctrine()
    //              ->getRepository('App:DataFixtures')
    //              ->findAll();

    // return $this->render('exo/display.twig.html', [
    //     'data' => $data,
    // ]);
    // }
}
