<?php
require_once 'Figure.php';
// 円クラス
class Circle implements Figure {
    private float $radius; // 半径
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    // FigureクラスのgetArea()をオーバーライドする
    public function getArea(): float {
        return pow($this->radius, 2) * M_PI;
    }
}