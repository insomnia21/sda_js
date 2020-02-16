<?php

class Customer
{
    public $name;
    protected $age;
    private $lastName;

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $name): Customer
    {
        $this->lastName = $name;

        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): Customer
    {
        if ($age < 0) {
            throw new \Exception('Tylko liczby dodatnie');
        }

        $this->age = $age;

        return $this;
    }

    public function getDiscount(): int
    {
        return 20;
    }
}

?>