<?php

namespace classes;

class SharesView extends Shares {
  public function showShares() { //laat maar zien!
      $results = $this->getShares();
      foreach ($results as $row) {
          echo "Auteur: " . $row['name'] . "<br>";
          echo "Titel: " . $row['title'] . "<br>";
          echo "Post: " . $row['body'] . "<br>";
          echo "Link: " . $row['link'] . "<br>";
          echo "Timestamp: " . $row['create_date'] . "<br><br>";
      }
  }
}

