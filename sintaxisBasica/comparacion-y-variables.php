<?php

// Asignacion
$num = 9;
$lang = [
    "es" => "espaniol",
    "en" => "ingles"
]; // Asignacion dentro de [] es: =>

// Aritmetica
echo "Suma 2 + 2" . ((int) 2 + (int) 2);
echo "Resta 2 - 2" . ((int) 2 - (int) 2);
echo "Multiplica 2 * 2" .  2 * 2;
echo "Divide 2 / 2" .  2 / 2;
echo "Modulo 2 % 2" .  2 % 2; // Residuo de una division
echo "Exponencial 2 ** 2" .  2 ** 2; // Exponencial

// Comparacion
// Igual ==, valor '9' == 9 (estamos comparando valores)
// Igual ===, valor '9' === 9 (estamos comparando valores y tipo)

// Diferencias
// !=, valores
// !==, valores y tipo

//Mayores y menores
// <, >, <=, >=

// Variables variables
$app = 'name';
$name = 'platzi';
echo $app; // va a imprimir 'name'
echo $$app; // va a imprimir 'platzi'