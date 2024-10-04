<?php
  class SharesView extends Shares {
    public function showShares() {
        $results = $this->getShares();
        foreach ($results as $row) { //split het array op in individuele items
            echo "Auteur: " . $row['name'] . "<br>";
            echo "Titel: " . $row['title'] . "<br>";
            echo "Post: " . $row['body'] . "<br>";
            echo "Link: " . $row['link'] . "<br>";
            echo "Timestamp: " . $row['create_date'] . "<br><br>";
        }
    }
}
