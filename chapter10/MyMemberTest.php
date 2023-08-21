<?php
require_once 'MyMember.php';

$birthDate = new DateTime("2000-08-18");
print($birthDate->format("Y年m月d日") . "<br>");
$mem = new MyMember(1234, '山田太郎', 72, 168, $birthDate);

print("{$mem->getName()}さん({$mem->age()}歳)のBMI値は" . number_format($mem->bmi(), 1));