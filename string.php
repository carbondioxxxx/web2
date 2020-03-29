<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php require('lib/print.php'); ?>

<?php
if (isset($_GET['id']))
{?> <p><a href="update.php?id=<?= $_GET['id']?>">Update?</a>
<form action="delete_process.php" method="post">
  <input type="hidden" name="id" value="<?= $_GET['id']?>">
  <input type = "submit" value = "delete">
</form>
</p>
<?php } ?>

<h4> <a href="create.php"> <?php echo "Write your favorite Champions and details." ?>  </a> </h4>

</html>
