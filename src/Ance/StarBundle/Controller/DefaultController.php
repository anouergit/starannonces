<?php

namespace Ance\StarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AnceStarBundle:Default:index.html.twig', array('name' => $name));
        die('rrr');
    }
}
