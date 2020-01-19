<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript">
      function checkmail()
      {

        var mail= document.getElementById("mail").value;
        var pattern =/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,5})([\.a-z]{2,5})?$/;
        if (!(pattern.test(mail))) {
          alert("enter valid email");
        }
      }
    </script>
    <title></title>
  </head>
  <body>
    <form class="" action="displayfifth.php" method="post">
      <input type="email" id="mail" name="email" value="" placeholder="Enter E-mail" onchange="checkmail()">
    </form>
  </body>
</html>
