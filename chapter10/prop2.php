<?php
require_once 'Person3.php';

$p1 = new Person();
$p1->lastName = '山田';
$p1->firstName = '太郎';
$p1->age = 38;
$p1->show();

$p2 = new Person();
$p2->lastName = '鈴木';
$p2->firstName = '花子';
$p2->age = 28;
$p2->show();