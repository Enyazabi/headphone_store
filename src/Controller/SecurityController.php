<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/security", name="security")
     */
    public function login()
    {


        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }



}