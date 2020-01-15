
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript">

    function demo()
    {
        var first=document.getElementById("fName").value;
        var last=document.getElementById("lName").value;
        document.getElementById("full").value=first.concat(" ",last);
    }

    function check(inputtxt)
    {
        var letters = /^[a-zA-Z]*$/;
        var valid= !letters.test(inputtxt.value)
        if(valid){
          alert('alphabets only');
        }
    }
    </script>
    <title></title>
  </head>
  <body>
    <form name="form1" method="post" action="display.php" >
      First Name - <input id="fName" type="text" name="fName" value="" placeholder="First name" onchange="demo(),check(document.form1.fName) ;">
      <br><br>
      Last Name - <input id="lName" type="text" name="lName" value="" placeholder="Last name" onchange="demo(), check(document.form1.lName) ">
      <br><br>
      Full Name - <input  id="full" type="text" name="fullName" value="" readonly>
      <br><br>
      <input type="submit" name="Submit" value="Submit">
    </form>
    </body>
  </html>
