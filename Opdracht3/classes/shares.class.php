<?php
    class Shares extends Dbh {
        protected function getShares() { //niet meer per individuele share
            $sql = "SELECT shares.*, users.name FROM shares 
                    JOIN users ON shares.user_id = users.id"; //dus de query moet anders
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    
    
    protected function setShare($user_id, $title, $body, $link) {
        $sql = "INSERT INTO shares(user_id, title, body, link) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $title, $body, $link]);
      }
}
