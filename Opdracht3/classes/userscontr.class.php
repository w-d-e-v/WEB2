<?php
 class UsersContr extends Users {
  public function createUser() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $name = $_POST['username'];
          $email = $_POST['email'];
          $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $this->setUser($name, $email, $password);
      }
  }

  public function loginUser() {
        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $results = $this->getUser($username);
            if (!$results) {
                echo "User not found!";
                return;
            }
            $savedPassHash = $results['password'];
            
            if (password_verify($password, $savedPassHash)) {
                echo "Inloggen gelukt!";
            } else {
                echo "Niet gelukt";
            }
        }
  }

}