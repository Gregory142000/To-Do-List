<?php

namespace ConnectionDataBase;

require_once "../model/Query.php";

class ActionForm {
  private $title;
  private $content;

  function __construct($title, $content) {
    $this->title = $title;
    $this->title = $content;
  }

  public function add() {
    $add = new Query();
    $add->getAddTask($this->title, $this->content);
  }

  function __destruct() {
    $this->title = "";
    $this->content = "";
  }
}