<?php

namespace classes;

  class SharesView extends Shares {
    public function showShare($id) {
      $results = $this->getShare($id);
      echo "Auteur: " . $results[0]['name'] . "<br>";
      echo "Titel: " . $results[0]['title'] . "<br>";
      echo "Post: " . $results[0]['body']. "<br>";
      echo "Link: " . $results[0]['link'] . "<br>";
      echo "Timestamp: " . $results[0]['create_date'];
    }
  }
