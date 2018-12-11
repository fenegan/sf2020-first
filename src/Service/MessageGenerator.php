<?php

namespace App\Service;

use App\Entity\Messages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageGenerator extends AbstractController
{
    public function getHappyMessage()
    {
        $messages = $this->getDoctrine()->getRepository(Messages::class)->findAll();
        $message = array_rand($messages);
        dump($messages[$message]);
        return $messages[$message];
    }
}
