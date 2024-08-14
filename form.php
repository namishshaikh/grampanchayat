
<?php

error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'gram_panchayat');
if (isset($_POST['submit'])) {
$mukhiya_adhar= $_POST['mukhiya_adhar'];
$mukhiya_name= $_POST['mukhiya_name'];
$yname= $_POST['yname'];
$f_name= $_POST['f_name'];
$m_name= $_POST['m_name'];
$birthday= $_POST['birthday'];
$gen= $_POST['gen'];
$reli_gion= $_POST['reli_gion'];
$castee= $_POST['castee'];
$sub_cast= $_POST['sub_cast'];
$education= $_POST['education'];
$occu_pation= $_POST['occu_pation'];
$contact= $_POST['contact'];
$sm_id= $_POST['sm_id'];
$income_certificate= $_POST['income_certificate'];
$adhaar_no= $_POST['adhar_no'];
$caste_certificate= $_POST['caste_certificate'];
$pan_number= $_POST['pan_number'];
$bank= $_POST['bank'];
$ifsc= $_POST['ifsc'];
$acc_no= $_POST['acc_no'];
$adre= $_POST['adre'];
$q ="insert into family_member(h_aadharno,h_name,m_name,father_name,mother_name,dob,gender,religion,caste,subcaste,edu_quali,occupation,mobile_no,sssm_id,aadhar_no,caste_certi,income_certi,pan_no,bank_name,ifsc_code,account_no,address) values('$mukhiya_adhar','$mukhiya_name','$yname','$f_name','$m_name','$birthday','$gen','$reli_gion','$castee','$sub_cast','$education','$occu_pation','$contact','$sm_id','$adhaar_no','$caste_certificate','$income_certificate','$pan_number','$bank','$ifsc','$acc_no','$adre')";
// $q="insert into family_member(h_aadharno,h_name,m_name,father_name,mother_name,dob,gender,religion,caste,subcaste,edu_quali,occupation,'mobile_no', 'sssm_id', 'aadhar_no','caste_certi','income_certi','pan_no','bank_name','ifsc_code','account_no','address')
// values('$mukhiyaa_adhar','$mukhiya_name','$bname','$f_name','$m_name','$birthday','$gen','$reli_gion','$castee','$sub_cast','$education','$occu_pation','$contact','$sm_id','$adhaar_no','$caste_certificate','$income_certificate','$pan_number','$bank','$ifsc','$acc_no','$adre')";
$result=mysqli_query($con,$q);
if($result){
    echo "<script> alert('data inserted successfully') </script>";

}
else{
    echo 'operation failed';
}
}
?>
<?
include 'files1.php'
?>

<div class="main">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>

<body>
 
    <div class="container">
        <!--------------------------------- logo  ----------------------------->
        <div class="heading">
            <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png"
                class="logo">
            <h2>ग्राम पंचायत डाटा मैनेजमेंट</h2>
        </div>
        <!------------------------------------------ main ------------------------------>
        <div class="content">

            <form class="needs-validation" method="post">
                <br>
                <div class="wrapper">
                    <div class="col-50">
                        <label for="name"><b>मुखिया का नाम *:</b></label>
                        <input type="text" name="mukhiya_name" class="form-control" id="name" paceholder="Family head"
                            value="" required>

                    </div>

                    <div class="col-50">
                        <label for="aadhar_id"><b>आधार क्रमांक *:</b></label>
                        <input type="text" name="mukhiya_adhar" class="form-control" id="fathername" placeholder=""
                            value="" required>
                    </div>
                </div>



                <!------------------------ Sub-Heading ------------------>
                <div class="heading">

                    <h5>सदस्य की जानकारी </h5>
                </div>
                <!------------------------ Sub-Heading End ------------------>

                <!------------------------- सदस्य की जानकारी ---------------------------->

                <div class="wrapper" id="wrapp">
                    <div class="col-25">
                        <label for="yourname">नाम :</label>
                        <input type="text" name="yname" class="form-control" id="yourname" placeholder="" value=""
                            required>
                    </div>
                    <div class="col-25">
                        <label for="fathername">पिता का नाम :</label>
                        <input type="text" name="f_name" class="form-control" id="mothername" placeholder="" value=""
                            required>
                    </div>
                    <div class="col-25">
                        <label for="mothername">माता का नाम :</label>
                        <input type="text" name="m_name" class="form-control" id="mothername" placeholder="" value=""
                            required>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-25">
                        <label for="birthday">जन्म दिनांक:</label>
                        <input type="date" name="birthday" class="form-control" id="birthday" c placeholder="" value=""
                            required>

                    </div>
                    <div class="col-25">
                        <label for="gender">लिंग :</label>
                        <select class="form-control" name="gen">
                            <optgroup>

                                <option value="male">पुरुष</option>
                                <option value="female"> महिला</option>
                                <option value="other">अन्य</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="col-25">
                        <label for="religion">धर्म :</label>
                        <select class="form-control" name="reli_gion">
                            <optgroup>
                                <option value="hindu">हिन्दू </option>
                                <option value="muslim">मुस्लिम</option>
                                <option value="christian">इसाई</option>
                                <option value="parsi">पारसी</option>
                                <option value="jain">जैन</option>
                            </optgroup>
                        </select>

                    </div>
                    <div class="col-25">

                        <label for="category">वर्ग :</label>
                        <select class="form-control" name="castee">
                            <optgroup>

                                <option value="general">सामान्य </option>
                                <option value="obc">अन्य पिछड़ा वर्ग </option>
                                <option value="scheduled_caste">अनुसूचित जाति </option>
                                <option value="scheduled_tribe">अनुसूचित जन जाति</option>
                                <option value="others">अन्य</option>

                            </optgroup>

                        </select>

                    </div>


                    <div class="col-25">
                        <label for="caste">जाति :</label>
                        <input type="text" name="sub_cast" class="form-control" id="caste" placeholder="" value=""
                            required>
                    </div>

                    <div class="col-25">
                        <label for="qualification">शैक्षणिक :</label>
                        <select class="form-control" name="education">
                            <optgroup>
                                <option value="educated"> </option>
                                <option value="5th">5th </option>
                                <option value="8th">8th </option>
                                <option value="10th">10th </option>
                                <option value="12th">12th </option>
                                <option value="graduate">Graduate </option>
                                <option value="post_graduate">Post Graduate </option>
                                <option value="uneducated">अनपढ़ </option>

                            </optgroup>

                        </select>
                    </div>




                    <div class="col-25">
                        <label for="mobile">मोबाइल नंबर :</label>
                        <input type="number" class="form-control" id="mobile" name="contact" placeholder="" value=""
                            required>

                    </div>

                    <div class="col-25">
                        <label for="aadhaar_number">आधार क्रमांक :</label>
                        <input type="text" class="form-control" id="aadhaar_number" name="adhar_no" placeholder=""
                            value="" required>
                    </div>

                    <div class="col-25">
                        <label for="account_no">खाता क्रमांक :</label>
                        <input type="text" class="form-control" id="account_no" name="acc_no" placeholder="" value=""
                            required>
                    </div>
                    <div class="col-25">
                        <label for="pan_no">पेन क्रमांक :</label>
                        <input type="text" class="form-control" id="pan_no" name="pan_number" placeholder="" value=""
                            required>
                    </div>

                    <div class="col-25">
                        <label for="type_of_livelihood">आजीविका का प्रकार :</label>
                        <select class="form-control" name="occu_pation">
                            <optgroup>
                                <option value="business">व्यापार </option>
                                <option value="labour">मजदूरी </option>
                                <option value="agriculture">कृषि </option>
                                <option value="government_servant">शासकीय सेवक</option>
                                <option value="private_job">प्राइवेट नोकरी </option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-25">
                        <label for="caste_certificate">जाति प्रमाण पत्र क्रमांक :</label>
                        <input type="text" class="form-control" id="caste_certificate" name="caste_certificate" value=""
                            required>
                    </div>
                    <div class="col-25">
                        <label for="income_tax">आय प्रमाण पत्र क्रमांक :</label>
                        <input type="text" class="form-control" id="income_tax" name="income_certificate" value="">
                    </div>
                    <div class="col-25">
                        <label for="samagra_id">परिवार समग्र आई.डी.:</label>
                        <input type="text" class="form-control" id="samagra_id" name="sm_id" placeholder="" value="">
                    </div>
                    <div class="col-25">
                        <label for="bank">बैंक का नाम:</label>
                        <input type="text" class="form-control" id="bank" placeholder="" value="" name="bank">
                    </div>
                    <div class="col-25">
                        <label for="bank_code">IFSC code:</label>
                        <input type="text" class="form-control" id="bank_code" name="ifsc" placeholder="IFSC Code"
                            value="">
                    </div>
                    <div class="col-25">
                        <label for="acc_no">बैंक खाता संख्या:</label>
                        <input type="text" class="form-control" id="acc_no" name='acc_no' placeholder="" value="">
                    </div>
                    <div class="col-25">
                        <label for="address">पता :</label>
                        <input type="text" name="adre" class="form-control" id="address" placeholder="" value="">
                    </div>

                   

                    <!-------------------------------------------- शासन द्वारा प्राप्त सुविधा : ------------------------------>
                </div>
                <!----------------------- sub-Heading ---------------->
                <div class="heading">

                    <h5>शासन द्वारा प्राप्त सुविधा :</h5>
                </div>
                <!------------------------ Sub-Heading End ------------------>
                <div class="form-input">

                    <div class="col-252">
                        <label for="beneficiary_name ">नाम हितग्राही :</label>
                        <input type="text" class="form-control" id="beneficiary_name " placeholder="" value="" required>
                    </div>
                    <div class="col-252">
                        <label for="name_of_plan">योजना का नाम :</label>
                        <input type="text" class="form-control" id="name_of_plan" placeholder="" value="">

                    </div>
                    <div class="col-252">
                        <label for="amount">राशि :</label><br>
                        <input type="text" class="form-control" id="amount" placeholder="" value="" required>
                    </div>
                    <div class="col-252">
                        <label for="year">वर्ष :</label><br>
                        <input type="text" class="form-control" id="which_year" placeholder="" value="" required>

                    </div>


                </div>
                <div>
                    <img class="plus-icon" src="icon/add.png"><br>
                </div>
                <!----------------------- sub-Heading ---------------->
                <div class="heading">

                    <h5>दस्तावेज़ अपलोड करें के लिए फाइल चुनें :</h5>
                    <div class="heading">
                           <h5>Upload documents:</h5>
                        </div>
                </div>
                <!------------------------ Sub-Heading End ------------------>
               <!-- #region -->

               <div class="wrapper">

                        <div class="upload_container">

                            <div class="col-30">
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="">समग्र आई.डी.
                                </label>

                                <input type="file" name="sss_" class="upload" accept=".pdf,.doc,.docx " multiple>
                                <!-- <input type="submit" value="upload" name="upload_id"  onclick="uploadDocument()" class="btnn"> -->
                                <input type="submit" value="view" name="view_id" class="btn">
                            </div>

                            <div class="col-30">
                                <label class="checkbox-inline" style="margin-left: 50px;">
                                    <input type="checkbox" value="">आधार कार्ड
                                </label>
                                <input type="file" name="adhr_" class="upload" accept=".pdf,.doc,.docx" multiple>
                                <!-- <input type="submit" value="upload" name="upload_aadhar" class="btnn"> -->
                                <input type="submit" value="view" name="view_aadhar" class="btn">
                            </div>



                            <div class="col-30">
                                <label class="checkbox-inline" style="margin-left: 50px;">
                                    <input type="checkbox" value="">Upload photo
                                </label>
                                <input type="file" name="image_" class="upload" accept=".png,.jpg">
                                <!-- <input type="submit" value="upload" name="submit" class="btnn"> -->
                                <input type="submit" value="view" name="view" class="btn">
                            </div>
                        </div>
                    </div>

                <!-- <div class="wrapper">
                      
                    <div class="col-30">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">परिवार की समग्र आई.डी.
                        </label>
                        
                        <input type="file" name="name" class="upload"  accept=".pdf,.doc,.docx " multiple>
                        <input type="submit" value="upload" name="upload_id"  onclick="uploadDocument()" class="btnn">
                        <input type="submit" value="view" name="view_id" class="btn">
                    </div>

                    <div class="col-30">
                        <label class="checkbox-inline" style="margin-left: 50px;">
                            <input type="checkbox" value="">आधार कार्ड
                        </label>
                        <input type="file" name="name" class="upload" accept=".pdf,.doc,.docx" multiple>
                        <input type="submit" value="upload" name="upload_aadhar" class="btnn">
                        <input type="submit" value="view" name="view_aadhar" class="btn">
                    </div>-->
                    
                       
                   
                </div> 

                <div class="wrapper"> 
                            <div class="heading">
                                <h6>अपलोड करने के बाद सबमिट बटन पर क्लिक करें :</h6>
                                <input type="submit" value="submit" name="submit" class="btn">
                            </div>
                     </div>
                <br>


              
</form>
              
            
               

        </div>
        <script src="form.js"></script>
 
</body>

</html>
</div>