<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    use modelo\ConversorTemperaturas;
    require_once("vendor/autoload.php");

    $conversor = new ConversorTemperaturas();
    echo "100 grados Celsius son {$conversor->CelsiusToFarenheit(100)} grados Farenheit";
    echo "<br>";
    echo "100 grados Farenheit son {$conversor->FarenheitToCelsius(100)} grados Celsius";
?>
</body>
</html>