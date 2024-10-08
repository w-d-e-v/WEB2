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
                header('Location: /login.html');
                exit;
            }
            $savedPassHash = $results['password'];
            
            if (password_verify($password, $savedPassHash)) {
                echo "You are logged in!";
                setcookie("Blogding", $username, time() + (86400 * 30), "/");

            } else {
                echo "Wrong password";
                header('Location: /login.html');
                exit;
            
            }
        }
  }
  
  public function logoutUser() {
    setcookie("Blogding", "", time() - 3600);
  }

}