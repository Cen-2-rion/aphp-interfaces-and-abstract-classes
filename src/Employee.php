<?php
declare(strict_types=1);

namespace src;

abstract class Employee
{
    protected string $name, $surname;
    public int $salary;

    public function __construct(string $name, string $surname, int $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;

        if ($this->salary < 0) {
            throw new \Exception('зарплата не может быть меньше 0');
        }
    }

    abstract public function getInfo(): string;
}
