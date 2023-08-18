<?php
class TriangleFigure {
    private float $base;
    private float $height;

    public function __construct(float $base, float $height) {
        $this->setBase($base);
        $this->setHeight($height);
    }
    public function getBase(): float {
        return $this->base;
    }
    public function setBase(float $base): void {
        if ($base <= 0) {
            throw new Exception('底辺は正数で指定します。');
        }
        $this->base = $base;
    }
    public function getHeight(): float {
        return $this->height;
    }
    public function setHeight(float $height): void {
        if ($height <= 0) {
            throw new Exception('高さは正数で指定します。');
        }
        $this->height = $height;
    }
    public function getArea(): float {
        return $this->base * $this->height / 2;
    }
}