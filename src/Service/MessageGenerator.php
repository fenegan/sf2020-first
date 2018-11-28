<?php

namespace App\Service;

use App\Repository\MessageRepository;

class MessageGenerator
{
    private $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }
    public function getHappyMessage()
    {
        $messages = $this->messageRepository->findAll();
        $index = array_rand($messages);
        return $messages[$index];
    }
}
