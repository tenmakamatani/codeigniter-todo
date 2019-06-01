<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>予定作成</title>
</head>
<body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('todo/create'); ?>
    <label for='title'>Title</label>
    <input type='input' name='title'>
    <br>
    <label for='content'>Content</label>
    <textarea name='content'></textarea>
    <br>
    <button type='submit'>Submit</button>
  </form>
</body>
</html>