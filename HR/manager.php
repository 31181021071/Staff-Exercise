<?php

namespace HR;

class Manager extends Staff implements ImportGoods,Payment
{
    public function __construct(string $name, string $position,bool $absent, int $workshift)
    {
        parent::__construct($name, $position, $absent,$workshift);
    }

    public function strikeCheck()
    {
        print("0 strike. \n");
    }
    public function import()
    {
        print("Imported 2 items. \n");
    }
    public function check()
    {
        print("There are 5 items left. \n");
    }
    public function checkBill()
    {
        print("Checked Bill. \n");
    }
    public function printBill()
    {
        print("Printing...\n");
        print("Printed. \n");
    }
}

