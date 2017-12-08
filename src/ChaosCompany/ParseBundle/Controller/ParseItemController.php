<?php

namespace ChaosCompany\ParseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ParseItemController extends Controller
{
	public function indexAction()
	{
		return $this->render( 'ChaosCompanyParseBundle:ParseItem:item.html.twig');
	}

	public function showItemAction($item)
	{
		return $this->render( 'ChaosCompanyParseBundle:ParseItem:item.html.twig', [
			'item' => $item
		]);
	}
	public function showDetailAction($item, $format)
	{
		if ($format === 'html') {
			return $this->render( 'ChaosCompanyParseBundle:ParseItem:detail.html.twig', [
				'item' => $item
			]);
		}
		return new JsonResponse($item);
	}
}