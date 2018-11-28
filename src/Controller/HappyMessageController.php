<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;

class HappyMessageController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(MessageGenerator $messageGenerator)
    {
        return $this->render('happy_message/index.html.twig', [
            'controller_name' => 'HappyMessageController',
            'message' => $messageGenerator->getHappyMessage(),
        ]);
    }
}
