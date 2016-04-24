<?php

namespace jenkins\phpunit;
/*
 * Conversion implements the following relationships
 * 
 * [°C] = ([°F] - 32) × 5/9
 * [°F] = [°C] × 9/5 + 32
 */
class conversion {

    public function fahrenheitToCelcius($fahrenheitTemp) {
        return ($fahrenheitTemp - 32.0) * (5.0/9.0);
    }

    public function celciusToFahrenheit($celciusTemp) {
        return ($celciusTemp * (9.0/5.0)) + 32.0;
    }

    public function celciusToKelvin($celciusTemp) {
        return ($celciusTemp + 273.15);
//        return 273.15;
    }
    
}