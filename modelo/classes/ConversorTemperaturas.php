<?php


namespace modelo;


class ConversorTemperaturas
{
    function CelsiusToFarenheit($celsius)
    {
        if ($celsius > 500)
            return INF; // Con PHP_FLOAT_MAX no coinciden los resultados porque devuelve INF automaticamente
        else
            return ($celsius * 9 / 5) + 32;
    }

    function FarenheitToCelsius($farenheit)
    {
        if ($farenheit > 932)
            return PHP_FLOAT_MAX;
        else
            return ($farenheit - 32) * 5 / 9;
    }
}