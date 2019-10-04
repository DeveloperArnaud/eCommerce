<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/products", name="products")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('App:Sneaker');
        $sneakers = $repo->findAll();
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'sneakers' => $sneakers
        ]);
    }


    /**
     * @Route("/product/{id}", name="product")
     */
    public function product_detail($id)
    {
        try {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('App:Sneaker');
        $sneaker = $repo->findBy(array('id'=> $id));
        } catch (PDOException $e)  {
            return "Error :" .$e->getMessage();
        }
        return $this->render('product/product_detail.html.twig', [
            'controller_name' => 'ProductController',
            'sneaker' => $sneaker
        ]);
    }
}
