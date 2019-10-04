<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index()
    {

        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }

    /**
     * @Route("/panier/{id}", name="ajouter")
     */
    public function ajouter($id)
    {


        return $this->redirectToRoute('panier');
    }
}
