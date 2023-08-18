<?php
class Person {
    public string $firstName;
    public string $lastName;

    public function show(): void {
        print("<p>私の名前は{$this->lastName}{$this->firstName}です。</p>");
    }
}