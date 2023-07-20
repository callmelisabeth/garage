<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NosPrestationsController extends AbstractController
{
  #[Route('/nosPrestations', 'nosPrestations', methods: ['GET'])]
  public function index(): Response
  {
    return $this->render('partials/header/link/nosPrestations.html.twig');
  }
}
