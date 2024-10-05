<?php
  class UsersContr extends Users {
    public function createUser($name, $email, $password) {
      if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
      $this->setUser($name, $email, $password);
      return '<h1>User successfully created!</h1>';
      } else {
        return file_get_contents('/classes/register.html');
      }
    }
  }