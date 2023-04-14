<?php
require_once __DIR__ . '\vendor\autoload.php';
include_once __DIR__ . '\src\personClass\Programmer.php';

use src\personClass\Programmer;
use src\personClass\Tester;
use src\personClass\Director;
use src\personClass\Manager;

$people[] = new Programmer('Вася', 'Пупкин', 32, 'пишет код');
$people[] = new Programmer('Анна', 'Ахматова', 31, 'пишет код');
$people[] = new Tester('Александр', 'Пушкин', 30, 'тестирует код');
$people[] = new Director('Билл', 'Гейтс', 50, 'управляет отделом разработки');
$people[] = new Manager('Нилл', 'Гейман', 28, 'на технические и психологические темы');
$people[] = new Manager('Джейн', 'Эйр', 30, 'на технические темы');

$sum = 0;

foreach ($people as $person) {
    echo "___" . PHP_EOL;
    echo $person->getInfo() . PHP_EOL;
    $sum += $person->getSalary();
}
echo "______________" . PHP_EOL;
echo "Общее количество сотрудников: " . count($people) . PHP_EOL;
echo "Общая сумма зарплат: $sum";