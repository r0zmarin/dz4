<?php

trait CoolingTrait
{
    function Cooling()
    {
        echo 'GO' . PHP_EOL;
        for ($l = 0, $t = $this->statT; $l <= $this->distance; $t = $t + 10, $l = $l + 20) {
            if ($t >= 90) {
                echo 'vent onn  ';
                echo $l;
                echo PHP_EOL;
                $t = $t - 10;
            }
        }
        echo 'STOP' . PHP_EOL;
        echo 'Dvig off'.PHP_EOL;
    }

}