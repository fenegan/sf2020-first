<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\MessageGenerator;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Contact;
use App\Form\ContactType;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(MessageGenerator $messageGenerator)
    {
        return $this->render('main/index.html.twig', ["messages" => $messageGenerator->getHappyMessage()]);
    }

    /**
     * @Route("/contact-us.php", name="contact")
     */
    public function contact(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
    
            return $this->redirectToRoute('main');
        }
        
        return $this->render('main/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
