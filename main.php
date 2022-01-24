<?php

require __DIR__ . '/vendor/autoload.php';
use HR\Manager;
use HR\Casher;
use HR\Waiter;
use HR\Cook;

$manager = new Manager('Hải Quan', 'Manager', false, 8);
$casher = new Casher('Hải Quan', 'Casher', false, 8);
$waiter = new Waiter('Hải Quan', 'Waiter', false, 4);
$cook = new Cook('Hải Quan', 'Cook', false, 12);

$manager->import();
$manager->check();
$waiter->getOrder();
$cook->cook();
$waiter->serve();
$casher->checkBill();
$casher->printBill();




