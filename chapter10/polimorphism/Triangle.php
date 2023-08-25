<?php
require_once 'Figure.php';
// 三角形クラス
class Triangle implements Figure {
    private float $base;   // 底辺
    private float $height; // 高さ
    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }
    // FigureクラスのgetAreaメソッドをオーバーライド
    public function getArea(): float {
        return $this->base * $this->height / 2;
    }
}