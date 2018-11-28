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

        return sizeof($messages) !== 0 ? $messages[array_rand($messages)] : '';
    }
}
