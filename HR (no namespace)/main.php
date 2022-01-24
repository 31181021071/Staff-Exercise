<?php

require_once __DIR__ . '/manager.php';
require_once __DIR__ . '/casher.php';
require_once __DIR__ . '/waiter.php';
require_once __DIR__ . '/cook.php';

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





