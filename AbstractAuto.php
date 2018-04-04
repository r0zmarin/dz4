<?php
require_once "AutoInterface.php";
require_once "AutoTrait.php";
require_once "CoolingTrait.php";

abstract class AbstractAuto implements autoInterface
{
    const ONN = 1;
    const OFF = 0;
    public $name;
    public $forvard = 1;
    protected $stat = self::OFF; // не заведена.
    public $statT = 20; //темп. охл. на не завед.
    public $distance;
    public $speed = 10;

    public function vkl()
    {
        echo 'Dvig Onn'.PHP_EOL;
        return $this->stat = self::ONN ;
    }

    public function vikl()
    {
        echo 'Dvig Of'.PHP_EOL;
        return $this->stat = self::OFF;
    }

    public function move()
    {
        if ($this->forvard == 1) {
            $this->forwardGear();
        } else {
            $this->reversGear();
        }
    }

    protected function reversGear()
    {
        echo 'Reverse Gear';
        echo PHP_EOL;
    }

    protected function forwardGear()
    {
        echo 'Forvarde Gear';
        echo PHP_EOL;
    }
}