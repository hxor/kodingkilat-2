<?php

class Car {
    private function turnOn()
    {
        return 'Engine Starting...';
    }

    private function stepClutch()
    {
        return 'Holding the gear...';
    }

    private function shiftUpGear()
    {
        return 'Moving gear into the first...';
    }

    private function stepAccel()
    {
        return 'Begin pressing down on the accelerator...';
    }

    public function start()
    {
        $start = $this->turnOn();
        $start .= $this->stepClutch();
        $start .= $this->shiftUpGear();
        $start .= $this->stepAccel();
        $start .= 'Brrrrroooomm!!';
        echo $start;
    }
}

$car = new Car();
$car->start();