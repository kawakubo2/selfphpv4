<?php
require_once 'TriangleFigure.php';

try {
    $base = 12.5;
    $height = 8;
    $tri = new TriangleFigure($base, $height);
    print("<p>底辺が{$tri->getBase()}、高さが{$tri->getHeight()}の三角形の面積は{$tri->getArea()}</p>");
    $base = 8;
    $height = 5;
    $tri->setBase($base);
    $tri->setHeight($height);
    print("<p>底辺が{$tri->getBase()}、高さが{$tri->getHeight()}の三角形の面積は{$tri->getArea()}</p>");
} catch (Exception $e) {
    print($e->getMessage());
}
