

<?php  
error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
if (isset($_POST['submit'])) {
$vibhag_name= $_POST['deptname'];
$sansad_name= $_POST['sansadname'];
$address= $_POST['addre'];
$q="insert into govt_office (dept_name,sansad_name,address)values('$vibhag_name','$sansad_name','$address')";
$result=mysqli_query($con,$q);
if($result){
    echo "<script> alert('data inserted successfully') </script>";

}
else{
    echo 'operation failed';
}
}


?> 


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">

        <title>
            shaskiya sanstha
        </title>
        <link rel="stylesheet" href="form5.css">

    </head> 
    <body>
       
            
        <form method="post">
        <div class="container">
            <div class="wrapper">
                <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo">
                <h2><u><b>ग्राम पंचायत डाटा मैनेजमेंट</b></u></h2>
                <br><br>
                <div class="row">
                    <br>
                    <h5><b>ग्राम पंचायत में शासकीय संस्था </b></h5>
                
                    <div class="grid-container">
                        <div class="item-1">
                        <label for="name_of_work_2">विभाग का नाम :</label>
                        <input type="text" class="form-control" id="name_of_work_2" placeholder="" value="" name='deptname' required>
                        </div>
                        <div class="item-2">
                            <label for="name_of_saansad_1">सांसद का नाम  :</label>
                            
                        <input type="text" class="form-control" id="name_of_saansad_1" placeholder="" value="" name='sansadname' required>
                        </div>
                       
                    </div>

                    <div class="item-3">
                        <label for="saansad_address" >पता : </label><br>    
                        <textarea class="form-control" id="saansad_address" name='addre'></textarea>
                    </div>
                    <div class="btn-group" data-toggle="buttons" data-pg-collapsed> 
                        <input type="submit" name="submit" class="submit">
                    </div>
                      

                </div>
            </div>
        </div>

        </form>
   
    </body>
</html>
