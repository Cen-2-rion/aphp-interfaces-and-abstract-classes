<?php
declare(strict_types=1);

namespace src;

use interfaces\{ApplicationCreatorInterface, WebinarSpeakerInterface};

class Programmer extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    private string $post = 'программист';

    public function getApplicationCreatorInterface(): string
    {
        return "может заняться разработкой приложений";
    }

    public function getWebinarSpeakerInterface(): string
    {
        return "может вести вебинар для коллег";
    }

    public function getInfo(): string
    {
        return "$this->name $this->surname, позиция: $this->post, зарплата: $this->salary попугаев, {$this->getApplicationCreatorInterface()}: пишет код, {$this->getWebinarSpeakerInterface()}: на технические и психологические темы." . PHP_EOL;
    }
}
