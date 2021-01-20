<?php
namespace ConnectionDataBase;

require "./Connection.php";

class Query extends Connection {
  private $query;

  function __construct() {
    parent::__construct();
  }

  private function addTask($title, $content) {
    $this->query = "INSERT INTO toDoList(title, content) VALUES(:TITLE, :CONTENT)";
    $sentence = $this->conn->prepare($this->query);
    $sentence->bindParam(':TITLE', $title);
    $sentence->bindParam(':CONTENT', $content);
    $sentence->execute();
  }

  public function getAddTask($title, $content){
    return $this->addTask($title, $content);
  }

  function __destruct() {
    $this->query = "";
  }
}