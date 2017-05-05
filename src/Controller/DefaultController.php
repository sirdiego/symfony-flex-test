<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController.
 */
class DefaultController extends Controller
{
    public function index($name)
    {
        return $this->render('index.html.twig', compact('name'));
    }
}