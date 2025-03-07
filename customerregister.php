<?php 
  
  include 'Connection.php'; 
      
if(isset($_POST['btnsubmit']))
{
 
  $name=$_POST['usrname'];  
   $add=$_POST['address'];  
    $phno=$_POST['phno'];  
     $nrc=$_POST['nrc'];  
      $ps=$_POST['psw'];  

   
  $insert="insert into customer (name,address,phoneno,nrcno,password) values ('$name','$add','$phno','$nrc','$ps')";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('  Successfully Register');</script>";
     echo"<script>window.location='cuslogin.php';</script>";
  }
  else
  {
    echo mysqli_error($connect);
  }

}
      
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>
<body>

  
<h3>Register Your Account    <a ><img src="images/op.png"></a></h3>
<p>Try to submit the form.</p>

<div class="container">
  <form action="customerregister.php"  method="post" class="search-property 2" nctype="multipart/form-data">
    
    <label for="usrname">Username</label>
    <input type="text" id="usrname" name="usrname" required>
    <label for="usrname">Address</label>
    <input type="text" id="usrname" name="address" required>
    <label for="usrname">Phone Number</label>
    <input type="text" id="usrname" name="phno" required>
    <label for="usrname">Nrc Number</label>
    <input type="text" id="usrname" name="nrc" required>
    
  
  

    <label for="psw">Password</label>
    <input type="password" id="myInput" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="form-control"  > 
     <input type="checkbox" onclick="myFunction()">
    
              
              

     
    <input type="submit" name="btnsubmit" value="Submit">

    
  </form>

  <script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</div>


<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>6 characters</b></p>
</div>
        
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 6) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>
<div class="container">



</div>

