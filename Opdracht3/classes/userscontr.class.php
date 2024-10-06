<?php
 class UsersContr extends Users {
  public function createUser() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $name = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $this->setUser($name, $email, $password);
      }
  }
}