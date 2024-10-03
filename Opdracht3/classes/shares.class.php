<?php
    class Shares extends Dbh {
        protected function getShare($id) {
            $sql = "SELECT shares.*, users.name FROM shares 
                JOIN users ON shares.user_id = users.id 
                WHERE shares.id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            // Use fetch() for 1 row, and fetchAll() for all rows
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
    }
    protected function setShare($user_id, $title, $body, $link) {
        $sql = "INSERT INTO shares(user_id, title, body, link) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $title, $body, $link]);
      }
}
