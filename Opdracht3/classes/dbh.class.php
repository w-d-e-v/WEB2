<?php
  class Dbh {
    private $host = '127.0.0.1';
    private $user = 'deeltijdUser';
    private $pwd = 'geefMijToegang!';
    private $dbName = 'deeltijd';

    protected function connect() {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->user, $this->pwd);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $pdo;
    }
  }
