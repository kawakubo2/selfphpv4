<?php
class Rectangle {
    public float $width; // 幅
    public float $height; // 高さ

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    /**
     * プロパティの幅と高さから面積を求めて返す
     *
     * @return float 面積
     */
    public function area(): float {
        return $this->width * $this->height;
    }
    /**
     * プロパティの幅と高さから対角線の長さを求めて返す
     * 
     * @return float 対角線の長さ
     */
    public function diagonal(): float {
        return hypot($this->width, $this->height);
    }
    /**
     * プロパティの幅と高さから外周を求めて返す
     * 
     * @return float 外周
     */
    public function perimeter(): float {
        return ($this->width + $this->height) * 2;
    }
}