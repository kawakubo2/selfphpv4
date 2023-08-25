<?php
require_once 'Figure.php';
// 菱形クラス
class Diamond implements Figure {
    private float $diagonal1; // 対角線1
    private float $diagonal2; // 対角線2
    public function __construct(float $diagonal1, float $diagonal2) {
        $this->diagonal1 = $diagonal1;
        $this->diagonal2 = $diagonal2;
    }
    public function getArea(): float {
        return $this->diagonal1 * $this->diagonal2 / 2;
    }
}