<?php

namespace modelo;

use PHPUnit\Framework\TestCase;

class ConversorTemperaturasTest extends TestCase
{

    public function testCelsiusToFarenheit()
    {
        $conversor = new ConversorTemperaturas();
        $resultado = floor($conversor->CelsiusToFarenheit(0)*100)/100;
        $this->assertEquals(32, $resultado);
        $resultado = floor($conversor->CelsiusToFarenheit(50)*100)/100;
        $this->assertEquals(122, $resultado);
        $resultado = floor($conversor->CelsiusToFarenheit(500)*100)/100;
        $this->assertEquals(932, $resultado);
        $resultado = floor($conversor->CelsiusToFarenheit(501)*100)/100;
        $this->assertEquals(INF, $resultado);
    }

    public function testFarenheitToCelsius()
    {
        $conversor = new ConversorTemperaturas();
        $resultado = ceil($conversor->FarenheitToCelsius(0)*100)/100; // ceil para resultados menores de 0
        $this->assertEquals(-17.77, $resultado);
        $resultado = floor($conversor->FarenheitToCelsius(200)*100)/100;
        $this->assertEquals(93.33, $resultado);
        $resultado = floor($conversor->FarenheitToCelsius(600)*100)/100;
        $this->assertEquals(315.55, $resultado);
        $resultado = floor($conversor->FarenheitToCelsius(932)*100)/100;
        $this->assertEquals(500, $resultado);
    }
}
