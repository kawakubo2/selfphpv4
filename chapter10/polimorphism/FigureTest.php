<?php
require_once 'Rectangle.php';
require_once 'Circle.php';
require_once 'Triangle.php';
require_once 'Diamond.php';
require_once 'AreaCalculator.php';

try {
    $player1 = [new Rectangle(10, 10), new Circle(5), new Triangle(10, 20), new Rectangle(11, 10)];
    $player2 = [new Circle(7), new Rectangle(12.5, 8), new Triangle(10, 10), 
        new Rectangle(10, 8), new Diamond(5, 5)];

    $player1_total = AreaCalculator::getTotalArea($player1);
    $player2_total = AreaCalculator::getTotalArea($player2);

    if ($player1_total > $player2_total) {
        print('プレイヤー1の勝ちです。');
    } else if ($player1_total < $player2_total) {
        print('プレイヤー2の勝ちです。');
    } else {
        print('引き分けです。');
    }
    print('<hr>');
    print("<p>プレイヤー1: {$player1_total}</p>");
    print("<p>プレイヤー2: {$player2_total}</p>");

} catch (Exception $e) {
    print($e->getMessage());
    exit();
}