<?php
// namespace ConnectionDataBase;

require_once "ActionForm.php";

if(isset($_POST['update-id']) && $_POST['update-id'] !== "") {
  $newTitle = $_POST["title"];
  $newDescription= $_POST["description"];
  $newId = $_POST["update-id"];
  $form = new ActionForm($newTitle, $newDescription, $newId);

  $form->update();
} else if(isset($_POST["title"])) {
  $newTitle = $_POST["title"];
  $newDescription= $_POST["description"];
  $form = new ActionForm($newTitle, $newDescription);

  $form->add();
} else if(isset($_GET["task-id"])) {
  $newId = (int)$_GET["task-id"];
  $form = new ActionForm("" , "", $newId);

  $form->delete();
}

header("Location: ../view/index.php");