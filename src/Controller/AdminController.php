<?php

namespace App\Controller;
use App\Entity\Headphone;
use App\Form\HeadphoneType;
use App\Repository\HeadphoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="addProduct")
     */
    public function addProduct(Request $request, HeadphoneRepository $headphoneRepository)
    {
        $headphone = new Headphone();
        $headphoneForm = $this->createForm(HeadphoneType::class, $headphone);

        $headphoneForm->handleRequest($request);
        if ($headphoneForm->isSubmitted() && $headphoneForm->isValid())
        {
            $headphone = $headphoneForm->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($headphone);
            $em->flush();
        }
        return $this->render('admin/adminpage.html.twig', [
            'headphoneForm' => $headphoneForm->createView(),
            'headphone' => $headphoneRepository->findAll(),
        ]);

    }

    public function showHeadphoneCatalog(HeadphoneRepository $headphoneRepository)
    {

        return $this->render('admin/adminpage.html.twig', [
            'headphone' => $headphoneRepository->findAll(),

        ]);
    }

    /**
     * @param HeadphoneRepository $headphoneRepository
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteProduct(HeadphoneRepository $headphoneRepository, $id)
    {
        $headphone=$headphoneRepository->findOneBy([
            'id'=>$id,
        ]);
        $em=$this->getDoctrine()->getManager();
        $em->remove($headphone);
        $em->flush();
        return $this->redirectToRoute('admin');
    }

}
