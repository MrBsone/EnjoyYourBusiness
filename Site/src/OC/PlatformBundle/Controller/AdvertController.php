<?php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{

    //Cette méthode
    public function indexAction($page)
    {
        //On récupère les résultats de la méthode du repository
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('OCPlatformBundle:Advert');

        $listAdverts = $repository->findAll();



        // On déclanche une page d'erreur si une page est inférieur à 1
        if ($page < 1)
        {
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }

        return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }


    public function viewAction($id)
    {
        //On récupère les résultats de la méthode du repository
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('OCPlatformBundle:Advert');

        $listAdvert = $repository->find($id);

        if ($listAdvert === null)
        {
            throw new NotFoundHttpException('Page "' . $id . '" inexistante.');
        }

        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
            'listAdverts' => $listAdvert
        ));

    }

}