<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>予定の詳細</title>
</head>
<body>
  <h1><?php echo $todo['todo_title'] ?></h1>
  <p><?php echo $todo['todo_content'] ?></p>
  <a href="<?php echo 'todo/delete/'.$todo['todo_id'] ?>">この予定を削除</a>
  <br>
  <a href="<?php echo 'todo/updateform/'.$todo['todo_id'] ?>">この予定を編集</a>
</body>
</html>