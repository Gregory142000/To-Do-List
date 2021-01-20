<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDoList</title>
  <!-- My Styles -->
  <link rel="stylesheet" href="./public/css/styles.css">
</head>
<body>

  <main>
    <section>
      <h1>To Do List</h1>
      <form action="" method="post">
        <div>
          <label for="title">Title: </label>
          <input type="text" id="title" name="title" require placeholder="What do you want to do?" />
        </div>
        <div>
          <label for="description">Description: </label>
          <textarea id="textarea"></textarea>
        </div>
        <input type="submit" value="Add">
      </form>
    </section>
    <section id="homework-list">
    </section>
  </main>

  <script src="./public/js/index.js"></script>
</body>
</html>