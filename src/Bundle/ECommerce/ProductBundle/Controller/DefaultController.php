<?php

namespace Bundle\ECommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductBundle:Default:index');
    }
}
