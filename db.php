<?php

class DB {
    private $host = "localhost";
    private $username = "dada";
    private $password = "password";
    private $dbName = "dadadb";

    public function connect() {
        $dsn = "mysql:host=" . $this->host ."; dbname=" . $this->dbName;
        $pdo = new PDO ($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
        return $pdo;
    }

}

class Contacts extends DB {
    public function insert($name, $email,$phone,$title, $message) {
        $sql = "INSERT INTO contacts (name, email,phone,title, message) VALUES (?, ?,? ,?, ?);";
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute([$name, $email, $phone, $title, $message]);
             
    
    }

}

  
?>