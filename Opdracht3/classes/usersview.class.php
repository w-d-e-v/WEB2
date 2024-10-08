<?php
  class UsersView extends Users {
    public function showUser($naam) {
      $results = $this->getUser($naam);
      echo "id: " . $results[0]['id']; 
    }
  }