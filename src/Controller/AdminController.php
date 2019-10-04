<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/product-admin", name="product-admin")
     */
    public function index()
    {   
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('App:Sneaker');
        $sneakers = $repo->findAll();
        return $this->render('admin/product-admin.html.twig', [
            'controller_name' => 'AdminController',
            'sneakers' => $sneakers
        ]);
    }

     /**
     * @Route("/users-admin", name="users-admin")
     */
    public function usersListAdmin()
    {   
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('App:User');
        $users = $repo->findAll();
        return $this->render('admin/users-admin.html.twig', [
            'controller_name' => 'AdminController',
            'users' => $users
        ]);
    }
}



