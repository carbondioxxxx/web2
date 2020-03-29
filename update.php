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
  <form action="delete_process" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id']?>">
    <input type = "submit" value = "delete"></form </p>
<?php } ?>

<form action = "update_process.php" method = "post">
  <p><input type="hidden" name = "old_title" value = "<?=print_title();?>"></p>
    <p><input type="text" name="title" value = "<?= print_title(); ?>"> </p>
    <p>
  <textarea name="description"placeholder="Write details here." rows="8" cols="80"><?php print_description();?></textarea></p>
    <p><input type = "submit"></p>
    </form>
<h4> <a href="create.php"> <?php echo "Write your favorite Champions and details." ?>  </a> </h4>

</html>
