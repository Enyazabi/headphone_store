<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HeadphoneController extends AbstractController
{
    /**
     * @Route("/headphone", name="headphone")
     */
    public function index()
    {
        return $this->render('headphone/index.html.twig', [
            'controller_name' => 'HeadphoneController',
        ]);
    }
}
