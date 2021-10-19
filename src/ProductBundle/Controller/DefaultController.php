<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/" name="product_home")
     */
    public function indexAction()
    {
        return $this->render('@Product/Default/index.html.twig');
    }
}
