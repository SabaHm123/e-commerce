<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Form\TextType;
use Symfony\Component\Form\TextareaType;
use Symfony\Component\Form\EmailType;


class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    /**
    *@Route("/email")
    */
    public function sendEmail(MailerInterface $mailer):Response
    {
    	$email =(new Email())
    	->from('hello@gmail.com')
    	->to('amir.souissi@yahoo.fr')
    	->subject('atelier symfony')
    	->html('<p> ceci est un test d"envoi d"email </p>');
    	$mailer -> send($email);
    	return new Response("email sent successfully!");

    }
}
