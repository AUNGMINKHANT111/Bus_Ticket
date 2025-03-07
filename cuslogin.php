<?php

 session_start();
  include 'Connection.php'; 
  $id=$_GET["bid"];
if(isset($_POST['btnlogin']))
{
  $name=$_POST['txtname'];
  $password=$_POST['txtpassword'];
  $bid=$_POST['txtBokingid'];
  //$bid='B-000029';
  $insert="SELECT * from customer,booking where name='$name'and password='$password'";
  $ret=mysqli_query($connect,$insert);
  $count=mysqli_num_rows($ret);
  if($count)
  {
          $file = mysqli_fetch_assoc($ret);
          $_SESSION['customerid']=$file['customerid'];
           $_SESSION['bookingid']=$file['bookingid'];      
        
        $cid=$file['customerid'];
       
            echo"<script>alert(' Login Success');window.location='display.php?cid=$cid&bid=$bid';
            </script>"; 
   
  }
  
      else 
      {
              echo"<script> 
                  alert('Incorrect login!' );window.location='cuslogin.php';</script>";
      }
  }
  

?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="cuslogin.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1> Login <a ><img src="images/op.png"></a></h1>
    <p>Please fill in this form to Login Your account.</p>
    <hr>

    <input type="hidden"  name="txtBokingid" value='<?php echo $id?>' required>


    <label ><b>User Name</b></label>
    <input type="text" placeholder="Enter Email" name="txtname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txtpassword" id="myInput" required>
    <input type="checkbox" onclick="myFunction()">Show Password 
    
    
    <label>
      <br><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    

    <div class="clearfix">
      <button type="submit" name="btnlogin" class="signupbtn">Login</button>
      
      
    </div>
    <p>If you don't have account register here <a href="customerregister.php" style="color:dodgerblue">Register</a>.</p>
  </div>
</form>

</body>
</html>
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