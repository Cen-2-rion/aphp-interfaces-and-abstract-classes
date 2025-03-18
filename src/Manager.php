<?php
declare(strict_types=1);

namespace src;

use interfaces\LeadInterface;

class Manager extends Director implements LeadInterface
{
    private string $post = 'менеджер';

    public function getInfo(): string
    {
        return "$this->name $this->surname, позиция: $this->post, зарплата: $this->salary попугаев, {$this->getLeadInterface()} персоналом" . PHP_EOL;
    }
}
