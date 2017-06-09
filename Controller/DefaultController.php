<?php

namespace pidevDE\BillbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pidevDEBillbeeBundle:Default:index.html.twig');
    }
}
