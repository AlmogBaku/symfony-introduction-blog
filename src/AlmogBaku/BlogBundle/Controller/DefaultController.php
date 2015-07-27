<?php

namespace AlmogBaku\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template("BlogBundle:Post:list.html.twig")
     */
    public function listAction()
    {
        $repo = $this->getDoctrine()->getRepository("BlogBundle:Post");
        $entities = $repo->findAll();
        return array('entities' => $entities);
    }
}
