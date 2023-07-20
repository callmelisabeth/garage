<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AproposController extends AbstractController
{
  #[Route('/apropos', 'apropos', methods: ['GET'])]
  public function index(): Response
  {
    return $this->render('partials/header/link/aPropos.html.twig');
  }
}
