<?php
require_once 'MyClass.php';

$haba = 12.2;
$takasa = 4.25;

print("幅が{$haba}、高さが{$takasa}の長方形の面積は" . MyClass::square($haba, $takasa));