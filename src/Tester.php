<?php
declare(strict_types=1);

namespace src;

use interfaces\ApplicationCreatorInterface;

class Tester extends Programmer implements ApplicationCreatorInterface
{
    private string $post = 'тестировщик';

    public function getInfo(): string
    {
        return "$this->name $this->surname, позиция: $this->post, зарплата: $this->salary попугаев, {$this->getApplicationCreatorInterface()}." . PHP_EOL;
    }
}
