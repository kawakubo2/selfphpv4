<?php
require_once 'Rectangle.php';

class CoordinateRectangle extends Rectangle {
    public float $x;
    public float $y;

    public function __construct(float $width, float $height, float $x, float $y) {
        parent::__construct($widht, $height);
        $this->x = $x;
        $this->y = $y;
    }
    // 長方形の左上の頂点から原点までの距離
    public function distance(): float {
        return hypot($this->x, $this->y);
    }

}