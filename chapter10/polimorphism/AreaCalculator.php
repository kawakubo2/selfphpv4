<?php
require_once 'Figure.php';

class AreaCalculator {
    public static function getTotalArea(array $figures) {
        $sum = 0;
        foreach ($figures as $f) {
            if (!($f instanceof Figure)) {
                throw new Exception("Figureクラスを継承していません。");
            }
            // getAreaメソッドはFigureクラスではなく、それを継承したクラスの
            // getAreaメソッドが動く。このことをポリモーフィズム(多態性)と呼ぶ。
            $sum += $f->getArea(); 
        }
        return $sum;
    }
}