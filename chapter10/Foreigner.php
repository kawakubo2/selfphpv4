<?php
require_once 'Person4.php';

class Foreigner extends Person {
    private string $middleName;

    public function __construct(string $firstName, string $middleName, string $lastName) {
        parent::__construct($firstName, $lastName);
        $this->middleName = $middleName;
    }
    public function show(): void {
        print("<p>ボクの名前は{$this->firstName}・{$this->middleName}・{$this->lastName}です。</p>");
    }
}