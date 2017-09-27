<?php

namespace SquirrelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SquirrelBundle:Default:index.html.twig');
    }
}
