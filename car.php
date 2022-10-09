<?php

class Car 
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    function __construct(string $color, int $nbSeats, string $energy) 
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward() 
    {
        $this->currentSpeed = 15;
        return "Gooo !";
    }

    public function brake() 
    {   
        $sentence = "";
        while($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        $this->currentSpeed = 0;
        $sentence= "";
        while ($this->currentSpeed <= 0) {
            $this->currentSpeed++;
            $sentence .= "Let's start this car";
        }
        return $sentence;
    }

    public function getNbWheels ():int {
        return $this->nbWheels;

    }

    public function getCurrentSpeed ():int {
        return $this->currentSpeed;

    }

    public function getColor ():string {
       return $this->color;

    }

    public function getNbSeats ():int {
       return $this->nbSeats;

    }

    public function getEnergy ():string {
        return $this->energy;

    }

    public function getEnergyLevel ():int {
       return $this->energyLevel;

    }
}

?>