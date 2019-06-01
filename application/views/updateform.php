<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>予定編集</title>
</head>
<body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('/todo/update/'.$todo['todo_id']) ?>
    <label for='title'>Title</label>
    <input type='input' name='title' value='<?php echo $todo['todo_title'] ?>'>
    <br>
    <label for='content'>Content</label>
    <textarea name='content'><?php echo $todo['todo_content'] ?></textarea>
    <br>
    <button type="submit">更新</button>
  </form>
</body>
</html>