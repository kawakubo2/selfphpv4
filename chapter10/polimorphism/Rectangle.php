<?php
require_once 'Figure.php';
// 長方形クラス
class Rectangle implements Figure {
    private float $width;
    private float $height;
    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    // FigureクラスのgetArea()をオーバーライド
    public function getArea(): float {
        return $this->width * $this->height;
    }
}