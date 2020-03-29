<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php require('lib/print.php');  ?>

<form action = "create_process.php" method = "post">
  <p><input type="text" name="title" placeholder="Champion"></p>
  <textarea name="description"placeholder="Write details here." rows="8" cols="80"></textarea>

    <p><input type = "submit"></p>
    </form>
</html>
