<?php
require_once 'CoordinateRectangle.php';

$crec = new CoordinateRectangle(6, 8, 4, 3);
$distance = $crec->distance(); // CoordinateRectangleが持つメソッド
$area = $crec->area();         // Rectangleが持つメソッド
print("原点からの距離: {$distance}<br>");
print("面積: {$area}<br>");