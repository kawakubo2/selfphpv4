<?php
require_once 'Rectangle.php';

$r = new Rectangle(6, 8); // コンストラクタインジェクション(コンストラクタを使ってプロパティに値を設定)
print("面積: " . $r->area() . "<br>");
print("対角線: " . $r->diagonal() . "<br>");
print("外周: " . $r->perimeter() . "<br>");