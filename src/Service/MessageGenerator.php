<?php

namespace App\Service;

use App\Entity\HappyMessage;
use App\Repository\HappyMessageRepository;

class MessageGenerator
{
    public $happyMessageRepository;

    public function __construct(HappyMessageRepository $happyMessageRepository)
    {
        $this->happyMessageRepository = $happyMessageRepository;
    }

    public function getHappyMessage()
    {
        $messages = $this->happyMessageRepository->findAll();
        $index = array_rand($messages);

        return $messages[$index]->getContent();
    }
}