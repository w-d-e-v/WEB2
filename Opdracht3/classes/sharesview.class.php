<?php
  class SharesView extends Shares {
    public function showShares() {
        $results = $this->getShares();
        foreach ($results as $row) { //split het array op in individuele items
            echo '<div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">';
            echo "<h2>" . $row['title'] . "</h2><br>";
            echo '<small>' . $row['create_date'] . "</small><br>";
            echo $row['body'] . "<br><br><br>";
            
            echo "Author: " . $row['name'] . "<br>";
            
            echo '<a class="btn btn-secondary" href="' . $row['link'] . '">Go to Website</a><br>';
            
            echo '<form method="post" action="/deleteShare">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<input type="submit" class="btn btn-danger" value="Delete Share">';
            echo '</form>';

            
            echo '</div>';
        }
    }
}
