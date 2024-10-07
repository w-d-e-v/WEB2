<?php
  class Users extends Dbh {
    protected function getUser($naam) {
      $sql = "SELECT * FROM users WHERE name = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$naam]);
      // Use fetch() for 1 row, and fetchAll() for all rows
      $results = $stmt->fetch(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setUser($name, $email, $password) {
      $sql = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name, $email, $password]);
    }
  }