<?php
$list = scandir('./data');
$what = $_POST['title'];
global $aa;
$aa = null;

/*if (array_key_exists($_POST['title'], $list))*/
if (is_file("data/".$_POST["title"]))
{
echo "You cannot summit this name. We already have it.";
$aa = false;
}
else
{
  file_put_contents('data/'.$_POST['title'],$_POST['description']);
  $aa = true;
}
?>

<?php
if ($aa == true)
{
echo "Thank you for submit your writing!";
echo "<p>What's new? : ".$_POST['title']."</p>";
}

 ?>


<h2> <a href="string.php">Goto_main</a> </h2>
