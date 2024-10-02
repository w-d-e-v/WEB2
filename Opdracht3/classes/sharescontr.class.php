<?php
  class SharesContr extends Shares {
    public function createShare($user_id, $title, $body, $link) {
      $this->setShare($user_id, $title, $body, $link);
    }
  }
