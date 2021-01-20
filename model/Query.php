<?php
// namespace ConnectionDataBase;

require_once "Connection.php";

class Query extends Connection {
  private $query;
  public $external_sentence;

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

  private function readTask() {
    $this->query = "SELECT * FROM toDoList";
    $sentence = $this->conn->prepare($this->query);
    $this->external_sentence = $sentence;
    return $this->external_sentence;
  }

  private function deleteTask($id) {
    $this->query = "DELETE FROM toDoList WHERE id = :ID";
    $sentence = $this->conn->prepare($this->query);
    $sentence->bindParam(':ID', $id);
    $sentence->execute();
  }

  private function updateTask($title, $content, $id) {
    $this->query = "UPDATE toDoList SET title = :TITLE, content = :CONTENT WHERE id = :ID";
    $sentence = $this->conn->prepare($this->query);
    $sentence->bindParam(':TITLE', $title);
    $sentence->bindParam(':CONTENT', $content);
    $sentence->bindParam(':ID', $id);
    $sentence->execute();
  }

  public function getAddTask($title, $content) {
    return $this->addTask($title, $content);
  }

  public function getReadTask() {
    return $this->readTask();
  }

  public function getDeleteTask($id) {
    return $this->deleteTask($id);
  }

  public function getUpdateTask($title, $content, $id) {
    return $this->updateTask($title, $content, $id);
  }

  function __destruct() {
    $this->query = "";
  }
}