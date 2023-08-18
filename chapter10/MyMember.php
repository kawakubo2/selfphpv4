<?php
class MyMember {
    private int $id;
    private string $name;
    private float $weight;
    private float $height;
    private DateTime $birthDate;
   
    public function __construct(int $id, string $name, float $weight, float $height, DateTime $birthDate) {
        $this->setId($id);
        $this->setName($name);
        $this->setWeight($weight);
        $this->setHeight($height);
        $this->setBirthDate($birthDate); 
    }
    
    // アクセサメソッド
    public function getId(): int {
        return $this->id;
    }
    private function setId(int $id): void {
        if ($id <= 0) {
            throw new Exception("IDは正の整数を指定してください。");
        }
        $this->id = $id;
    }
    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name): void {
        if (trim($name) === "") {
            throw new Exception("名前は必須指定です。");
        }
        $this->name = $name;
    }
    public function getWeight(): float {
        return $this->weight;
    }
    public function setWeight(float $weight): void {
        if ($weight <= 0) {
            throw new Exception("体重は正数を指定してください。");
        }
        $this->weight = $weight;
    }
    public function getHeight(): float {
        return $this->height;
    }
    public function setHeight(float $height): void {
        if ($height <= 0) {
            throw new Exception("身長は正数を指定してください。");
        }
        $this->height = $height;
    }
    public function setBirthDate(DateTime $birthDate): void {
        $this->birthDate = $birthDate;
    }
    public function bmi(): float {
        return $this->weight / pow($this->height / 100, 2);
    }
    public function age(): int {
        $today = new DateTime("now");
        print($today->format("Y年m月d日") . "<br>");
        $diff = $today->diff($this->birthDate);
        return (int)$diff->format('%y');
    }
}