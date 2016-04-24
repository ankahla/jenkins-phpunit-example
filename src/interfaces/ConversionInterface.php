<?php
namespace jenkins\phpunit;

interface ConversionInterface {
    
    public function fahrenheitToCelcius(double $fahrenheitTemp);
    
    public function celciusToFahrenheit(double $celciusTemp);
    
    public function celciusToKelvin(double $celciusTemp);
}