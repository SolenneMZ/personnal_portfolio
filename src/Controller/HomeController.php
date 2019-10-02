<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'title' => 'Bienvenue sur le site de Solenne Mazabraud',
        ]);
    }

    /**
     * @Route("/yellow", name="yellow", methods={"GET"})
     */
    public function yellowTribeProject()
    {
        return $this->render('projects/yellow_tribe.html.twig', [
            'title' => 'Bienvenue sur le site de Solenne Mazabraud',
        ]);
    }

    // /**
    //  * @Route("/yellow-tribe", name="yellow_tribe")
    //  */
    // public function projectYellowTribe()
    // {
    //     return $this->render('projects/yellow_tribe.html.twig', [
    //        'title' => 'Project Yellow Tribe', 
    //     ]);
    // }
}
