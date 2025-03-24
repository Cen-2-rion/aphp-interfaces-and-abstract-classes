<?php
declare(strict_types=1);

require_once(__DIR__ . '/autoload.php');

use src\{Director, Employee, Manager, Programmer, Tester};

$people = [];

$employees = [
    ['Director', 'ivan', 'ivanov', -150],
    ['Manager', 'olga', 'orlova', 90],
    ['Programmer', 'petr', 'petrov', 120],
    ['Tester', 'kuzma', 'kuzmichev', -100],
];

foreach($employees as [$post, $name, $surname, $salary]) {
    try {
        switch($post) {
            case 'Director':
                $people[] = new Director($name, $surname, $salary);
                break;
            case 'Manager':
                $people[] = new Manager($name, $surname, $salary);
                break;
            case 'Programmer':
                $people[] = new Programmer($name, $surname, $salary);
                break;
            case 'Tester':
                $people[] = new Tester($name, $surname, $salary);
                break;
        }
    } catch (Exception $e) {
        echo "Ошибка при создании $post ($name $surname): {$e->getMessage()}" . PHP_EOL;
        echo PHP_EOL;
    }
}

$sum = 0;

foreach ($people as $item) {
    static $sum = null;
    if ($item instanceof Employee) {
        $sum += $item->salary;
        echo $item->getInfo();
        echo PHP_EOL;
    }
}

echo "Общее количество сотрудников: " . count($people) . PHP_EOL;
echo "Общая сумма зарплат: $sum попугаев.";
