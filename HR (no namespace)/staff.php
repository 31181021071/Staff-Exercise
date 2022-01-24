<?php
abstract class Staff
{
    protected string $name;
    protected string $position;
    protected bool $absent;
    protected int $workshift;

    public function __construct(string $name, string $position,bool $absent, int $workshift)
    {
        $this->name = $name;
        $this->position = $position;
        $this->absent=$absent;
        $this-> workshift = $workshift;
    }

    public function getInfo()
    {
        return [
            'name' => $this->name,
            'position' => $this->position,
            'absent' => $this->absent,
            'workshift' => $this->workshift
        ];
    }

    public abstract function strikeCheck();
}

