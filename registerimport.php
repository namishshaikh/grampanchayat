<?php

// error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
if(isset($_POST['submit'])){
    
    $filename = $_FILES["uploadfile"]["name"];              
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "upload_image/" . $filename;
    move_uploaded_file($tempname, $folder);
$uname=$_POST['user']; 
//$slquery = "SELECT 1 FROM register WHERE username = '$uname'";
$selectresult = mysqli_query($con,"SELECT * FROM admin WHERE username = '$uname'");
$password=$_POST['pass'];
$confirm_pas=$_POST['confirm'];

if (mysqli_num_rows($selectresult)>0)
{
    //  $msg = 'email already exists';
    //   echo  'email already exists';
      echo '<script>alert("email already exists")</script>';
}
else{
    $q="insert into admin (username,password,image) values('$uname','$password','$tempname')";
    $result = mysqli_query($con,$q);
    $id = mysqli_insert_id($con);
    // $updatequery = mysqli_real_escape_string($con, "update admin set image = '$folder' where id = $id");
    // mysqli_query($con,$updatequery);
          if($result){
             echo '<script>alert("Submitted Successfully")</script>';
          }
    }
}
?>  
