<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function login(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('App:User');
        $user = $repo->findByEmailAndPwd($request->get('email'), $request->get('password'));
        $submit = $request->get('submit');
        if (isset($submit)) {
            if (!empty($user)) {
                return $this->redirectToRoute('products');
            } else {
                $message = "Vos identifiants sont incorrects!";
                return $this->render('connexion/index.html.twig', [
                    'message' => $message]);
            }
        }
        $message="";
        return $this->render('connexion/index.html.twig', [
            'message' => $message]);

    }

}
