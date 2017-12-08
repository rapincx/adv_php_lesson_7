<?php

namespace ChaosCompany\ParseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParseListController extends Controller
{
	public $list_items = [
		[
			'name' => 'Item 1',
			'content' => 'Item Content 1',
			'link' => 'https://vk.com',
			'date' => '31 December 2017'
		]
	];
	public function listAction()
	{
		return $this->render('ChaosCompanyParseBundle:ParseList:list.html.twig', [
			'list_items' => $this->list_items
		]);
	}
}