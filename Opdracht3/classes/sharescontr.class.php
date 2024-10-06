<?php /*
  class SharesContr extends Shares {
    public function createShare($user_id, $title, $body, $link) {
      $this->setShare($user_id, $title, $body, $link);
    }
  }

*/

  class SharesContr extends Shares {
  public function createShare() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $user_id = $_POST['user_id'];
          $title = $_POST['title'];
          $body = $_POST['body'];
          $link = $_POST['link'];
          $this->setShare($user_id, $title, $body, $link);
      }
  }
}