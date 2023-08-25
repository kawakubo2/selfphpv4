<?php
// Trapezoid.php
require_once 'Figure.php';
// 台形クラス
class Trapezoid implements Figure {
    private float $upperbase; // 上底
    private float $lowerbase; // 下底
    private float $height;    // 高さ
    public function __construct(float $upperbase, float $lowerbase, float $height) {
        $this->upperbase = $upperbase;
        $this->lowerbase = $lowerbase;
        $this->height    = $height;
    }
    public function getArea(): float {
        return ($this->upperbase + $this->lowerbase) * $this->height / 2;
    }
}