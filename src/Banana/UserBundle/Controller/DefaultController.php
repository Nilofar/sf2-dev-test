<?php

namespace Banana\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BananaUserBundle:Default:index.html.twig');
    }
}