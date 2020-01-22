var error =false;

function checkmail()
{
  //used to check email syntax
  mail= document.getElementById("mail");
  var pattern =/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,5})([\.a-z]{2,5})?$/;
  if (!(pattern.test(mail.value)))
  {
      mail.classList.add("ivalid");
      mail.classList.remove("valid");
    // alert("correct");
  }
  else {
    mail.classList.add("valid");
      mail.classList.remove("ivalid");
// alert("Icorrect");
  }
}

function concat()
{
    // used to concat first name and last name in full name
    var first=document.getElementById("fName").value;
    var last=document.getElementById("lName").value;
    if(!error)
    document.getElementById("full").value=first.concat(" ",last);
}

function checkalpha(inputtxt,x)
{
  //used to check the value is alphabet in First Name and Last Name
    var letters = /^[a-zA-Z]*$/;
    var valid= letters.test(inputtxt.value);
    if(!(valid))
    {
      inputtxt.classList.add("ivalid");
      inputtxt.classList.remove("valid");
      error=true;
    }
    else
    {
      inputtxt.classList.add("valid");
      inputtxt.classList.remove("ivalid");
      error=false;
    }
    if (error) {
      x.style.display='block';
    }
    else {
      x.style.display='none';
    }

}

function CountryCode()
{
  //USED TO APPEND +91 IN PHONE NUMBER

  var tel= document.getElementById('pno');
  var phn_pattern=/^\+91[0-9]{10}$/;
  var valid=phn_pattern.test(tel.value)
  if (valid) {
    tel.classList.add("valid");
      tel.classList.remove("ivalid");
    // alert("correct");
  }
  else {
      tel.classList.add("ivalid");
      tel.classList.remove("valid");
// alert("Icorrect");
  }
}
