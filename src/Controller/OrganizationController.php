<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrganizationController extends AbstractController
{
    /**
     * @Route("/organization", name="organization")
     */
    public function index()
    {
        return $this->render('organization/index.html.twig', [
            'controller_name' => 'OrganizationController',
        ]);
    }
}
