<?php
require_once "AbstractAuto.php";

class VAZ extends AbstractAuto
{
    use TransmissionManual, CoolingTrait;

    public function __construct()
    {
        $this->vkl();
    }
}

$NIVA = new VAZ();
$NIVA->forvard = 1;
$NIVA->distance = 300;
$NIVA->statT = 10;
$NIVA->speed = 15;
$NIVA->forvardGear();
$NIVA->move();
$NIVA->Cooling();
$NIVA->name = 'NIVA';
echo $NIVA->name;
