<?php  
session_start();
error_reporting(0);
$usname= $_POST['u_name'];
$passs= $_POST['pass'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'gram_panchayat');
$q="select * from admin where username='$usname' AND password='$passs'";
$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
 
if($num==1){

   $_SESSION['username']=$row['password'];
   echo"login sucessful";
   header('location:dashboard.php');

}
else{
    echo '<script>alert("Wrong password , Try again!</script>';
}



?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
     
    <div class="glass-form">
      <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo" alt="Watermark">
        <h2>Login Here </h2>
        <div>
        <form method="post">
            <div class="userInputBox">
                <input type="text" id="usernameInputBox" name="u_name" required>
                <Label for="usernameInputBox">Username</Label>
            </div>

            <div class="userInputBox">
                <input type="password" id="passwordInputBox" name="pass" required>
                <Label for="passwordInputBox">Password</Label>
            </div>
            
            <div >
                 <button type="submit" name="submit" class='btn'>submit</button>
            </div>
            </form>
        </div>
    </div>
     
</body>
</html>
