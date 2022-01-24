<?php

require_once __DIR__ . '/staff.php';

class Cook extends Staff
{
    protected bool $food;
    public function __construct(string $name, string $position,bool $absent, int $workshift,bool $food=true)
    {
        parent::__construct($name, $position, $absent,$workshift);
        $this->food= $food;
    }

    public function cook()
    {
        if($this->food){
            print("Ready to serve!\n");
        }
        else{
            print("Food is being made.\n");
        }
    }
    public function strikeCheck()
    {
        print("2 strike.\n");
    }

}