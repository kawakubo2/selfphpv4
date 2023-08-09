<?php
class Person {
    public string $firstName;
    public string $lastName;
    public int $age;

    public function show(): void {
        print("<p>私の名前は{$this->lastName}{$this->firstName}({$this->age}歳)です。</p>");
    }
}