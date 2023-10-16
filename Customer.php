<?php
class Customer {
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __toString() {
        return "ID: {$this->id}, Name: {$this->firstName} {$this->lastName}, Email: {$this->email}";
    }
}
