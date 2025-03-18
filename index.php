<?php
declare(strict_types=1);

require_once(__DIR__ . '/autoload.php');

use src\{Director, Employee, Manager, Programmer, Tester};

$people[] = new Director('ivan', 'ivanov', 150);
$people[] = new Manager('olga', 'orlova', 90);
$people[] = new Programmer('petr', 'petrov', 120);
$people[] = new Tester('kuzma', 'kuzmichev', 100);

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
