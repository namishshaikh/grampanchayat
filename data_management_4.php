<?php
error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
$panch_nam=$_POST['panchname'];
$sarpanch_nam=$_POST['sarpanchname'];
$janpad_memname=$_POST['jmname'];
$jila_mname=$_POST['pmname'];
$work_name=$_POST['wname'];
$sansad_name=$_POST['sname'];
$q="insert into representative (panch_name,sarpanch_name,dist_mname,distp_mname,wname,sansad_name) values('$panch_nam','$sarpanch_nam','$janpad_memname','$jila_mname','$work_name','$sansad_name')";
$result=mysqli_query($con,$q);
if($result)
{
    echo "<script>alert('data inserted')</script>";
}
    else
    {
        echo 'operation failed';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="data_management_4.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="imagecontainer">
        <img src="icon/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo">
        <h2>ग्राम पंचायत के जनप्रतिनिधी</h2>
      </div>
      <br>
      <br>
      <div class="container">
        <form method="post">
            <div class="row">
                <div class="col-25">
                    <label for="pname">
                        पंच का नाम
                    </label>
                </div>
                <div class="col-75">
                    <textarea id="pname" name="panchname" placeholder="पंच का नाम" style="height: 100px;"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                सरपंच का नाम
            </div>
        <div class="col-75">
            <input type="text" id="spname" name="sarpanchname" placeholder="सरपंच का नाम">
        </div>
            </div>
            <div class="row">
                <div class="col-25">
                जनपद सदस्य का नाम
            </div>
                <div class="col-75">
                    <input type="text" id="jmname" name="jmname" placeholder="जनपद सदस्य का नाम">
                </div>       
            </div>
            <div class="row">
                <div class="col-25">
                जिला पंचायत सदस्य का नाम
                </div>
                <div class="col-75">
                    <input type="text" id="pmname" name="pmname" placeholder="जिला पंचायत सदस्य का नाम">
                </div>  
            </div>
            <div class="row">
                <div class="col-25">
                कार्य का नाम
            </div>
            <div class="col-75">
                    <input type="text" id="wname" name="wname" placeholder="कार्य का नाम">
                </div> 
            </div>
            <div class="row">
                <div class="col-25">
                सांसद का नाम
            </div>
            <div class="col-75">
                <input type="text" id="sname" name="sname" placeholder="सांसद का नाम">
            </div> 
            </div>
            <br>
            <div class="submitbtn">
            <div class="row">
              <input type="submit" value="Submit">
            </div>
            </div>   
        </form>
      </div>
</body>
</html>