<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
  #[Route('/contact', 'contact', methods: ['GET'])]
  public function index(): Response
  {
    $form=$this->createForm(ContactType::class);
    return $this->renderForm('partials/header/link/contact.html.twig',[
      'controller_name' => 'ContactController',
      'formulaire' => $form,
  ]);
  }
}
