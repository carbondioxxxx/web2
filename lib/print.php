  <?php  function print_title(){
    if (isset($_GET['id']))
    {
    echo htmlspecialchars($_GET['id']);
    }
  } ?>

  <?php  function print_description(){
    if (isset($_GET['id']))
    {
    echo htmlspecialchars(file_get_contents("data/".$_GET["id"]));
    }
    else {
      if (basename($_SERVER['PHP_SELF']) == "string.php")
      {
      ?> <h2> <?='Hello!'?><h2> <?php
    }
  }
  } ?>
  <h1><a href="string.php">LOL Champions</a></h1>
<ol>
  <?php
  global $list;
  $list = scandir('./data');
  $i = 0;
  while ($i<count($list))
{
  $subtitle = htmlspecialchars($list[$i]);
  if ($list[$i] != '.')
  {
    if ($list[$i] != '..')
    {
      echo "<li> <a href=\"string.php?id=$subtitle\">$subtitle</a> </li>\n";
    }
  }
  $i += 1;

}
 ?>
</ol>
<h2>
<?php
print_title();
?>
</h2>
<?php
print_description();
?>
