<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    /* styling of content */
      table, tr, td,th{
        border: 2px solid black;
         border-collapse: collapse;
         padding: 5px;
         margin:30px;
      }
  
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // DISPLAY SUBJECT MARKS IN FORM OF TABLE
    $x=$_POST['comments'];
    $x=preg_replace('/[\r\n]+/', "\n", $x); //REGULAR EXPRESSION USED TO ELIMINATE EXTRA LINE BREAK
    $ids = explode("\n",$x);//DIVINDING INPUT STRING INTO ARRAY
    $ids2=array();
    foreach ($ids as $dat)
      {
        $ids2[] = explode("|", $dat);//DIVINDING INPUT STRING INTO 2D ARRAY
      }
    $arrayLength = count($ids2);
    echo "<table>";
    echo "<tr> <th>Subjects</th><th>Marks</th><tr>";
    for ($i = 0; $i < $arrayLength; $i++) //DISPLAY ARRAY IN HTML TABLE FORM
     {
       echo "<tr>";
        foreach($ids2[$i] as $value)
        {
          echo "<td>";
          echo $value;
          echo "</td>";
        }
       echo "</tr>";
     }
     echo "</table>";
  ?>
</body>
</html>
