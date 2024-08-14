<?php
error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
if (isset($_POST['submit'])) {
$yourname= $_POST['name'];
$padh= $_POST['designation'];
$contact= $_POST['contact'];
$sansad= $_POST['sansad_name'];
$dept= $_POST['dept'];
$q="insert into gov_officer (name,designation,mob_no,sansad_name,desig)values('$yourname','$padh','$contact','$sansad','$dept')";
$result=mysqli_query($con,$q);
if($result){
    echo "<script> alert('data inserted successfully') </script>";

}
else{
    echo 'operation failed';
}
}



?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">

    <title>
        shaskiya sevak
    </title>
    <link rel="stylesheet" href="form6.css">

</head>

<body>
    <div class="container">
        <div class="wrapper">
            <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png"
                class="logo">
            <h2><u><b>ग्राम पंचायत डाटा मैनेजमेंट</b></u></h2>
            <br><br>
            <div class="row">
                <br>
                <h5><b>ग्राम पंचायत में शासकीय सेवक </b></h5>

                <form method="post">

                    <div class="grid-container">
                        <div class="item-1">
                            <label for="name_1">नाम :</label>

                            <input type="text" class="form-control" id="name_1" name="name"  value="" required>
                        </div>
                        <div class="item-2">
                            <label for="working_post">पद :</label>

                            <select  name="designation" id="working_post" class="form-control"  >
                                <optgroup>
                                    <option value="gram_panchayat_secretary">ग्राम पंचायत सचिव </option>
                                    <option value="village_employment_assistant">ग्राम रोजगार सहायक </option>
                                    <option value="assistant_extension_officer">सहायक विस्तार अधिकारी </option>
                                    <option value="A.P.O_ngineering">ए.पी.ओ. इंजीनियरिंग</option>
                                    <option value="patwari">पटवारी</option>
                                    <option value="agricultural_development_extension_officer">कृषि विकास विस्तार
                                        अधिकारी
                                    </option>
                                    <option value="teacher">शिक्षक</option>
                                    <option value="helper">सहायिका</option>
                                    <option value="doctor">डॉक्टर </option>
                                    <option value="compounder">कम्पाउण्डर</option>
                                    <option value="veterinary_doctor">पशुचिकित्सक </option>
                                    <option value="veterinary_field_officer">पशु चिकित्सा क्षेत्र अधिकारी </option>
                                    <option value="भृत्य ">worshiper</option>
                                    <option value="B.L.O ">बी.एल.ओ.</option>
                                    <option value="forest_guard ">वनरक्षक</option>
                                    <option value="forester">वनपाल </option>
                                    <option value="livelier_worker ">आजीविका कार्यकर्ता</option>
                                    <option value="anganwadi_workers ">आंगनवाडी कार्यकर्ता </option>
                                    <option value="anganwadi_super wizard">आंगनवाडी सुपर वाईजर </option>
                                    <option value="other">अन्य </option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="item-3">
                            <label for="mobile_1">मोबाइल नंबर :</label>

                            <input type="text" class="form-control" id="mobile_1" placeholder="" value="" name="contact" required>
                        </div>

                        <div class="item-4">
                            <label for="name_of_saansad_2">सांसद का नाम :</label>

                            <input type="text" class="form-control" id="name_of_saansad_2" placeholder="" value="" name="sansad_name"
                                required>
                        </div>


                        <div class="item-5">
                            <label for="department">विभाग :</label>

                            <select name="dept" id="department" class="form-control" >
                                <optgroup  height="40px"  >
                                    <option value="education_department">शिक्षा विभाग </option>
                                    <option value="health_department">स्वास्थ विभाग </option>
                                    <option value="district_1">जनपद </option>
                                    <option value="department_of_public_affairs">राजस्व विभाग </option>
                                    <option value="agricultural_department">कृषि विभाग </option>
                                    <option value="forest_department">वन विभाग </option>
                                    <option value="women_and_force_development_department">महिला एवं बल विकास विभाग
                                    </option>
                                    <option value="animal_husbandry_department">पी.एच.ई. विभाग </option>
                                    <option value="legislative_department">विधुत विभाग </option>
                                    <option value="RES_department">आर.ई.एस. विभाग</option>
                                    <option value="election_commission">निर्वाचन आयोग </option>
                                    <option value="other">अन्य </option>
                                </optgroup>
                            </select>
                        </div>

                    </div>



                    <div class="btn-group" data-toggle="buttons" data-pg-collapsed>
                        <input type="submit" name="submit" class="submit">
                    </div>

                </form>


            </div>
        </div>
    </div>
</body>

</html>