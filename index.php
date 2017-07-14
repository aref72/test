<?php
include './Calc.php';

$calc = new Calc();

$calc->num1 = 2;
$calc->num2 = 5;
echo $calc->sum().'<br>';
echo $calc->mul();