<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;

class FossilController extends FOSRestController
{
  /**
   * @Route("/fossils", name="fossilDetail")
   */

  public function getFossilAction($catalogNumber)
  {
    $fossil = $this->getDoctrine()
      ->getRepository('AppBundle:Fossil')
      ->findOneBy(array('catalogNumber' => $catalogNumber));

    if (!$fossil) {
      throw $this->createNotFoundException(
        'No fossil found for id '.$catalogNumber
      );
    }


    $view = $this->view($fossil, 200)
      ->setTemplate("MyBundle:Category:show.html.twig")
      ->setTemplateVar('fossil')
//      ->setTemplateData($templateData)
    ;

    return $this->handleView($view);
  }
}
