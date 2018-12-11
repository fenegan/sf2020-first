<?php

namespace App\Service;

use App\Repository\HappyMessageRepository;

class MessageGenerator
{
    public $happyMessageRepository;

    public function __construct(HappyMessageRepository $happyMessageRepository)
    {
        $this->happyMessageRepository = $happyMessageRepository;
    }

    public function getHappyMessage(): string
    {
        $happyMessages = $this->happyMessageRepository->findAll();
        return empty($happyMessages) ? "Hello world!" : $happyMessages[array_rand($happyMessages)]->getMessage();
    }
}
