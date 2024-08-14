<?php
error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
$int_gram=$_POST['integrated_gram'];
$tot_pop=$_POST['total_population'];
$male_pop=$_POST['male_population'];
$female_pop=$_POST['female_population'];
$children_pop=$_POST['children_population'];
$category_pop=$_POST['category_population'];
$religion_pop=$_POST['religion_population'];
$religious_place=$_POST['religious_places'];
$total_vote=$_POST['total_voterss'];
$q="insert into general_info(sammilit_gram, population, male_popu, female_popu, child_popu, category_popu, religion_popu, religious_place, total_voters) values('$int_gram','$tot_pop','$male_pop','$female_pop','$children_pop','$category_pop','$religion_pop','$religious_place','$total_vote')";
$result=mysqli_query($con,$q);
if($result)
{
    echo 'data inserted';
}
    else
    {
        echo 'operation failed';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GramPanchayat Data Managment</title>
    <link rel="stylesheet" href="form3.css">
</head>
<body>
    <div class="container">
        <div class="heading">
            <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo">
            <h2><u><b>ग्राम पंचायत डाटा मैनेजमेंट</b></u></h2>
            
        </div>
        <br>
        <div class="content">
            <br><br>
            <h3><u><b>ग्राम पंचायत की सामान्य जानकारी</b></u></h3>
            <form class="needs-validation" novalidate method="POST" id="grampanchayatform">

                <div class="wrapper">
                    <br><br>
                    <div class="row">
                        <div class="col-25">
                            <label for="integrated_gram">सम्मिलित ग्राम : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                            <input type="text" class="form-control" id="integrated_gram" placeholder="" value="" name="integrated_gram">
                        </div>
                        <div class="col-25">
                            <label for="total_population">:ग्राम पंचायत की कुल जनसंख्या </label>
                            <input type="text" class="form-control" id="total_population" placeholder="" value="" name="total_population">
                        </div>
                        <div class="col-25">
                            <label for="male_population">ग्राम पंचायत में पुरुषों की संख्या :</label>
                            <input type="text" class="form-control" id="male_population" placeholder="" value="" name="male_population">
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-25">
                        <label for="female_population">ग्राम पंचायत में महिला की संख्या :</label>
                        <input type="text" class="form-control" id="female_population" placeholder="" value="" name="female_population">
                    </div>
                        <div class="col-25">
                         <label for="children_population">ग्राम पंचायत में बच्चों की संख्या :</label>
                            <input type="text" class="form-control" id="children_population" placeholder="" value="" name="children_population">
                        </div>
                        <div class="col-25">
                            <label for="category_population">ग्राम पंचायत में वर्गवार संख्या :</label>
                            <input type="text" class="form-control" id="category_population" placeholder="" value="" name="category_population">
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-25">
                        <label for="religion_population">ग्राम पंचायत की धर्म आधारित संख्या :</label>
                        <input type="text" class="form-control" id="religion_population" placeholder="" value="" name="religion_population">
                    </div>
                        <div class="col-25">
                            <label for="religious_places">ग्राम पंचायत में स्थित धार्मिक स्थल :</label>
                            <input type="text" class="form-control" id="religious_places" placeholder="" value="" name="religious_places">
                        </div>
                        <div class="col-25">
                            <label for="total_voters">ग्राम पंचायत में कुल वोटर :</label>
                            <input type="text" class="form-control" id="total_voterss" placeholder="" value="" name="total_voterss">
                        </div>
                    </div>
                    <br>
                    <div class="col-1">
                        <input type="submit" value="Save" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>