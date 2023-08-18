<?php
class Area {
    public static function circle(float $radius): float {
        return pow($radius, 2) * M_PI;
    }
}