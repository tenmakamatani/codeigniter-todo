<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>Todoリスト</title>
</head>
<body>
  <h1>Todo</h1>
  <ul>
    <?php foreach ($todos as $todo): ?>
      <li>
        <h3><a href='<?php echo site_url($todo['todo_id']) ?>'><?php echo $todo['todo_title'] ?></a></h3>
        <p><?php echo $todo['todo_content'] ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
  <a href="todo/createform">予定を作成</a>
</body>
</html>