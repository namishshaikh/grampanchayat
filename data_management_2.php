<?php
// error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
if (isset($_POST['submit'])) {
$work_name=$_POST['workname'];
$yojana_name=$_POST['yojananame'];
$total_amount=$_POST['totalamount'];
$vyay_amount=$_POST['vyayamount'];
$yearr=$_POST['year'];
$dept_name=$_POST['deptname'];
$q="insert into work (wname,yname,tamount,vamount,yearrr,dname) values('$work_name','$yojana_name','$total_amount','$vyay_amount','$yearr','$dept_name')";
$result=mysqli_query($con,$q);
if($result)
{
    echo 'data inserted';
}
    else
    {
        echo 'operation failed';
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="data_management_2.css" />
    <title>
        ग्राम पंचायत डाटा मैनेजमेंट
    </title>
</head>
<body>
<br>
<div class="imagecontainer">
  <img src="icon/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo">
  <h2>ग्राम पंचायत डाटा मैनेजमेंट</h2>
</div>
<br>
<br>
<div class="container">
  <form method="post">
  <div class="row">
    <div class="col-25">
      <label for="w">कार्य का नाम:</label>
    </div>
    <div class="col-75">
      <textarea id="w"name="workname" placeholder="कार्य का नाम लिखें" style="height: 100px;"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="y">योजना का नाम</label>
    </div>
    <div class="col-75">
      <textarea id="y" name="yojananame" placeholder="योजना का नाम" style="height: 100px;"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="t">कुल राशि</label>
    </div>
    <div class="col-75">
        <input type="text" id="t" name="totalamount" placeholder="कुल राशि">
      </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="vy">व्यय राशि</label>
    </div>
    <div class="col-75">
        <input type="text" id="vy" name="vyayamount" placeholder="व्यय राशि">
      </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="yea">वर्ष</label>
    </div>
    <div class="col-75">
        <input type="text" id="yea" name="year">
      </div>
    </div>
  <div class="row">
    <div class="col-25">
      <label for="dept">विभाग का नाम</label>
    </div>
    <div class="col-75">
        <input type="text" id="dept" name="deptname" placeholder="विभाग का नाम">
      </div>
  </div>
  <br>
  <div class="submitbtn">
  <div class="row">
    <input type="submit" name="submit" value="Submit">
  </div>
  </div>
  </form>
</div>

</body>
</html>