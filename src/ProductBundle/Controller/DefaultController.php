<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        
        return $this->render('@Product/Default/index.html.twig');
    }
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('@Product/Default/create.html.twig');
    }

    public function storeAction()
    {
        
    }
    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('@Product/Default/index.html.twig');
    }
    /**
     * @Route("/update")
     */
    public function updateAction()
    {
        return $this->render('@Product/Default/create.html.twig');
    }
    /**
     * @Route("/destroy")
     */
    public function destroyAction()
    {
        return $this->render('@Product/Default/create.html.twig');
    }
}
