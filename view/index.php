<?php require_once "../controller/ActionForm.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDoList</title>
  <!-- My Styles -->
  <link rel="stylesheet" href="./public/css/styles.css">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>

  <main>
    <section class="TaskPanel">
      <h1 class="TaskPanel__title" >To Do List</h1>
      <form class="TaskPanel__form" action="../controller/integration.php" method="post">
        <div class="TaskPanel__inputBox">
          <label class="TaskPanel__label" for="title">Title: </label>
          <input class="TaskPanel__taskTitle" type="text" id="title" name="title" required placeholder="What do you want to do?" />
        </div>
        <div class="TaskPanel__inputBox">
          <label class="TaskPanel__label" for="description">Description: </label>
          <textarea class="TaskPanel__description" name="description" id="description"></textarea>
        </div>
        <input type="hidden" id="input-update" name="update-id" value="" />
        <input type="submit" class="TaskPanel__add" value="Add">
      </form>
    </section>
    <section class="Task">
      
      <?php ActionForm::show(); ?>

    </section>
  </main>

  <script src="./public/js/index.js" type="module"></script>
</body>
</html>