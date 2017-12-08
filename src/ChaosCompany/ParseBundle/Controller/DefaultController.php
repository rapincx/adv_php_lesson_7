<?php

namespace ChaosCompany\ParseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChaosCompanyParseBundle:Default:index.html.twig');
    }
	public function showAddFormAction()
	{
		return $this->render( 'ChaosCompanyParseBundle:Default:add-form.html.twig');
	}
}
