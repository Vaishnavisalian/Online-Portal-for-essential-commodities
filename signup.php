<?php
    ob_start();
    $error=NULL;
    if(isset($_POST['submit']))
    {
 
        $fname=$_POST['fullname'];
        $phone=$_POST['phone'];
        $wing=$_POST['wing'];
        $floor=$_POST['floor'];
        $e=$_POST['email'];
        $pwd=$_POST['pwd'];
        $p2=$_POST['pwd2'];
        echo $e;
        echo$pwd;
       
        if($p2 != $pwd){
            $error="Your passwords do not match";
        }
        else{
            //form is valid
            //connect to mysql database
            $conn = mysqli_connect("localhost","root","","wdpbl");

            //sanitize form data
            $fname = $conn->real_escape_string($fname);
            $phone = $conn->real_escape_string($phone);
            $wing = $conn->real_escape_string($wing);
            $floor = $conn->real_escape_string($floor);
            $e = $conn->real_escape_string($e);
            $pwd = $conn->real_escape_string($pwd);
            $p2 = $conn->real_escape_string($p2);
            

            //generate vkey
            $vkey = md5(time().$e);

            //insert into database
            $pwd = md5($pwd);
            $insert = "INSERT INTO logindetails (fullname,phone,wing,floor,email,password,vkey) VALUES('$fname','$phone','$wing','$floor','$e','$pwd','$vkey')";
            if(mysqli_query($conn,$insert)){
                
                    $adminmail = "garadvaishnavi04@gmail.com";
                    $subject = "Email Verification";
                    $body = "https://emailgeneration.000webhostapp.com/SignupVerification.php?vkey=$vkey";
                    $headers = "From: garadvaishnavi04@gmail.com";
                    $headers1 = "From: $adminmail";
                    if (mail($e, $subject, $body, $headers) && mail($e,$subject,$body,$headers1)) {
                         echo 'alert("Email successfully sent to $e...");';
                        echo 'window.location.href = "signin.php";';
                        echo '</script>';
                    } else {
                        echo 'alert("Email sending failed...");';
                    }
                    
                ob_end_flush();
                
            }
            else{
                echo mysqli_error($conn);
            }



        }

    }
?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="mystyles.css">
<style>
  body
  {
    background-image: url('loginbg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
</head>  
<body onload="document.signup.fullname.focus();">  
<script src="signup.js"></script>  
<center>
<form name='signup' action="" onSubmit="return formValidation();" method="post">  
  <div class="wrapper">   
  <div>
    <h2 style=" text-align: center; "><u>Account Sign up</u></h2>
    <div>
      <label for="fullname"><b>User name </b></label>   
        <input type="text" name="fullname" placeholder= "User name" size="20" required />
    </div>  
    <br>
    <div>  
      <label for="phone"><b>Phone no. <b></label>
        <input type="text" name="phone" placeholder="phone no." size="15"/ required>
    </div>
    <br>
    <div>
      <label><b>Wing </b></label>  
         <select style="box-sizing: border-box;height: 27px; width: 50px;border-radius: 10px;background: #C0C0C0;color: #fff;" id="select" class="required" name="wing">  
          <option value="wing">-</option>  
          <option value="A">A</option>
          <option value="B">B</option> 
          <option value="C">C</option> 
          <option value="D">D</option>    
        </select>  
      <label><b>Floor </b></label>  
        <select style="box-sizing: border-box;height: 30px; width: 100px;border-radius: 10px;background: #C0C0C0;color: #fff;" id="select" class="required" name="floor">  
          <option value="floor">Floor</option>  
          <option value="1st Floor">1st Floor</option>
          <option value="2nd Floor">2nd Floor</option>  
          <option value="3rd Floor">3rd Floor</option>  
          <option value="4th Floor">4th Floor</option>  
          <option value="5th Floor">5th Floor</option>  
          <option value="6th Floor">6th Floor</option>    
        </select>  
    </div>
    <br>
    <div>
      <label for="email"><b>Email</b></label>  
        <input type="text" placeholder="Enter Email" name="email" required>  
    </div>
    <br>  
    <div>
      <label for="psw"><b>Password</b></label>  
        <input type="password" placeholder="Enter Password" name="pwd" required>  
    </div>
    <br>
    <div>  
      <label for="psw_repeat"><b>Re-type Password</b></label>  
        <input type="password" placeholder="Retype Password" name="pwd2" required>  
    </div>
    <p><input type="checkbox" checked="checked" name="terms">By creating an account you agree to our <a href="terms.html">Terms & Privacy</a>.</p>
    <input type="submit" name="submit" value="Sign up" class="registerbtn">
</form>  
</center>
</body>  
</html>