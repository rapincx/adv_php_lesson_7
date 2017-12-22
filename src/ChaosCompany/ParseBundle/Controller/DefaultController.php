<?php

namespace ChaosCompany\ParseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
