<?php
// namespace ConnectionDataBase;

require_once "../model/Query.php";

class ActionForm {
  private $title;
  private $content;
  private $id;

  function __construct($title = null, $content = "", $id = "") {
    $this->title = $title;
    $this->content = $content;
    $this->id = $id;
  }

  public function add() {
    $add = new Query();
    $add->getAddTask($this->title, $this->content);
  }

  public static function show() {
    $read = new Query();
    $show = $read->getReadTask();
    if($show->execute()) {
      while($row = $show->fetch(PDO::FETCH_ASSOC)) {
        if($row){
          print("
          <form action='../controller/integration.php' class='Task__form' method='GET'>
            <h2 class='Task__title'>" . $row['title'] . "</h2>
            <p class='Task__content'>" . $row['content'] . "</p>
            <button class='Task__update' >Update</button>
            <input type='submit' name='delete' class='Task__delete' value='Delete' />
            <input type='hidden' name='task-id' class='Task__id' value='" . $row['id'] . "'/>
          </form>
          ");
        } else{
          echo "There not are Tasks.";
        }
      }
    }
  }

  public function delete() {
    $delete = new Query();
    $delete->getDeleteTask($this->id);
  }

  public function update() {
    $update = new Query();
    $update->getUpdateTask($this->title, $this->content, $this->id);
  }

  function __destruct() {
    $this->title = "";
    $this->content = "";
    $this->id = "";
  }
}