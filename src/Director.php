<?php
declare(strict_types=1);

namespace src;

use interfaces\LeadInterface;

class Director extends Employee implements LeadInterface
{
    private string $post = 'директор';

    public function getLeadInterface(): string
    {
        return "может управлять или руководить";
    }

    public function getInfo(): string
    {
        return "$this->name $this->surname, позиция: $this->post, зарплата: $this->salary попугаев, {$this->getLeadInterface()} компанией." . PHP_EOL;
    }
}
