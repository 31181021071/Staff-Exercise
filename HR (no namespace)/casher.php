<?php

require_once __DIR__ . '/staff.php';
require_once __DIR__ . '/payment.php';

class Casher extends Staff implements Payment
{
    public function __construct(string $name, string $position,bool $absent, int $workshift)
    {
        parent::__construct($name, $position, $absent,$workshift);
    }

    public function strikeCheck()
    {
        print("0 strike.\n");
    }

    public function checkBill()
    {
        print("Checked Bill.\n");
    }
    public function printBill()
    {
        print("Printing...\n");
        print("Printed. \n");
    }
}