<?php
// クラス定義は自動的には動かない
class Person {
    public string $firstName;
    public string $lastName;

    // コンストラクタもメソッド(特殊メソッド)
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function show(): void {
        print("<p>私の名前は{$this->lastName}{$this->firstName}です。</p>");
    }
}