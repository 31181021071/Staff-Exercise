<?php

namespace HR;

class Waiter extends Staff implements ImportGoods
{
    protected bool $food;
    public function __construct(string $name, string $position,bool $absent, int $workshift,bool $food=true)
    {
        parent::__construct($name, $position, $absent,$workshift);
        $this->food= $food;
    }
    public function getOrder()
    {
        print("Getting order.\n");
        print("Finish.\n");
    }
    public function serve()
    {
        if($this->food){
            print("Ready to serve!\n");
        }
        else{
            print("Food is being made.\n");
        }
    }
    public function import()
    {
        print("Import 4 items.\n");
    }
    public function check()
    {
        print("There are 8 items left.\n");
    }
    public function strikeCheck()
    {
        print("1 strike.\n");
    }

}