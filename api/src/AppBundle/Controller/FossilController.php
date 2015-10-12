<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;

class FossilController extends FOSRestController
{
    /**
     * @Route("/fossil", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    public function showFossil($catalogNumber)
    {
        $fossil = $this->getDoctrine()
          ->getRepository('AppBundle:Fossil')
          ->findOneBy(array('catalogNumber' => $catalogNumber));

        if (!$fossil) {
            throw $this->createNotFoundException(
              'No fossil found for id '.$catalogNumber
            );
        }


        $view = $this->view($products, 200)
          ->setTemplate("MyBundle:Category:show.html.twig")
          ->setTemplateVar('fossil')
          ->setTemplateData($templateData)
        ;

        return $this->handleView($view);
    }
}
