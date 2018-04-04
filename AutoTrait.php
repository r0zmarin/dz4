<?php

trait TransmissionManual
{
    function forvardGear()
    {
        if ($this->forvard == true) {
            if ($this->speed < 10) {
                echo 'First Forvard Gear';
                echo PHP_EOL;
            } else {
                echo 'Second Forvard Gear';
                echo PHP_EOL;
            }
        } else {

            function reversGear()
            {
                echo 'Reverse Gear';
                echo PHP_EOL;
            }
        }
    }
}

