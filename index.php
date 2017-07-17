<?php
include './DB.php';

//$calc = new Calc();
//
//$calc->num1 = 2;
//$calc->num2 = 5;
//echo $calc->sum().'<br>';
//echo $calc->mul();


$db = new DB();
$db->setDbname('club');
$db->setDbpass('');
$db->setDbuser('root');
$db->setDbhost('localhost');
$db->connect();
//$db->query('select * from user');
//$row = $db->one();
//var_dump($row);
//$dbclub = new DB();
//$dbclub->setDbname('club');
//$dbclub->setDbpass('');
//$dbclub->setDbuser('root');
//$dbclub->setDbhost('localhost');
//$dbclub->connect();
//$dbclub->query('select * from game');
//$rowclub = $dbclub->all();
//var_dump($rowclub);

$row = $db->find('game')->all();
$row1 = $db->find('user')->all();
var_dump($row);
var_dump($row1);

