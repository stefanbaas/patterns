<?php
require_once 'Brakes.php';
require_once 'Engine.php';
require_once 'FuelTank.php';
require_once 'Wheels.php';

use Vehicle\Brakes;
use Vehicle\Engine;
use Vehicle\FuelTank;
use Vehicle\Wheels;

class Tractor
{
    private $brakes;
    private $engine;
    private $fuelTank;
    private $wheels;

    public function __construct()
    {
        var_dump("I am a tractor");
        $this->brakes = new Brakes();
        $this->engine = new Engine();
        $this->fuelTank = new fuelTank;
        $this->wheels = new Wheels(4);
    }
}