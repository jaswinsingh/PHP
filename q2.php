<?php session_start(); /* Starts the session */
if(!isset($_SESSION['Username']))
{
header("location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <form name="form1" method="post" action="p2.php" class="form" enctype="multipart/form-data">
      <input type="file" name="file" >
      <input type="submit" name="upload" >
    </form>
    <div class="pagination">
      <a href="q1.php">1</a>
      <a href="q2.php">2</a>
      <a href="q3.php">3</a>
      <a href="q4.php">4</a>
      <a href="q5.php">5</a>
      <a href="#">6</a>
    </div>
  </body>
</html>
