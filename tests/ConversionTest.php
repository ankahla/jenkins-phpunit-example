<?php
/*
 * This file is part of the Money package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jenkins\phpunit;


class ConversionTest extends \PHPUnit_Framework_TestCase
{

    public function testFahrenheitToCelcius() {
        $fahrenheitTemp = 41.0;
        $instance = new Conversion();
        $expResult = 5.0;
        $result = $instance->fahrenheitToCelcius($fahrenheitTemp);
        $this->assertEquals($expResult, $result, '', 0.0001);
    }

    public function testCelciusToFahrenheit() {
        $celciusTemp = 100.0;
        $instance = new Conversion();
        $expResult = 212.0;
        $result = $instance->celciusToFahrenheit($celciusTemp);
        $this->assertEquals($expResult, $result, '', 0.0001);
    }
    
    public function testCelciusToKelvin() {
        $celciusTemp = 45.0;
        $instance = new Conversion();
        $expResult = 318.15;
        $result = $instance->celciusToKelvin($celciusTemp);
        $this->assertEquals($expResult, $result, '', 0.0001);     
    }

}
