<?php

namespace App\Controller;

use App\Entity\Headphone;
use App\Form\HeadphoneType;
use App\Repository\HeadphoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HeadphoneController extends AbstractController
{
    /**
     * @Route("/headphone", name="headphone")
     */
    public function showHeadphoneCatalog(HeadphoneRepository $headphoneRepository)
    {
        $headphoneForm = $this->createForm(HeadphoneType::class);
        return $this->render('headphone/catalog.html.twig', [
            'headphone' => $headphoneRepository->findAll(),
            'headphoneForm' => $headphoneForm->createView(),
        ]);
    }


}
