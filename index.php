<html>
<head>
  <title>To-Do List</title>
</head>
<body>
  <h1>To-Do List</h1>
  <form action="todo.php" method="post">
    <input type="text" name="task" required>
    <input type="submit" value="Add Task">
  </form>
  <h2>Tasks:</h2>
  <ul>
    <?php
      $tasks = array();
      if (isset($_POST['task'])) {
        array_push($tasks, $_POST['task']);
      }
      foreach ($tasks as $task) {
        echo "<li>$task</li>";
      }
    ?>
  </ul>
</body>
</html>
