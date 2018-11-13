<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Contact;
use App\Form\ContactType;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }
    
    /**
     * @Route("/contact-us", name="contact")
     */
    public function contact()
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        return $this->render('main/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
