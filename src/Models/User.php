<?php

namespace Kevin369\PhpOopBestP\Models;

class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function logInfo() {
        return "User: {$this->name}, Email: {$this->email}";
    }
}
