 <?php
 error_reporting(0);
 $con = mysqli_connect('localhost', 'root', '', 'gram_panchayat'); 
 if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    exit();
 }

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $presentdate = $_POST['date'];
    $panchayatname = $_POST['panchayatname'];
    $gramname = $_POST['gramname'];
    $chair_man = $_POST['chair_man'];
    $gram_count = $_POST['gram_count'];
    $watersource = $_POST['watersource'];
    $river_name = $_POST['river_name'];
    $well_count = $_POST['wellcount'];
    $nistartalab = $_POST['nistartalab'];
    $mukhyatalab = $_POST['mukhyatalab'];
    $handpump_count = $_POST['handpump_count'];
    $tehsil_name = $_POST['tehsil_name'];
    $head_contacts = $_POST['head_contact'];
    $total_area = $_POST['totalarea'];
    $primaryschools = $_POST['primaryschools'];
    $secondary_school = $_POST['secondary_school'];
    $highersecondary = $_POST['highersecondary'];
    $malestudents = $_POST['malestudents'];
    $femalestudents = $_POST['femalestudents'];
    $anganwadi_count = $_POST['anganwadi_count'];
    $policestation = $_POST['policestation'];
    $policechowki = $_POST['policechowki'];

    
    $q = "INSERT INTO office_gp () VALUES ('$presentdate', '$panchayatname', '$gramname', '$chair_man', '$gram_count', '$watersource', '$river_name', '$well_count', '$nistartalab', '$mukhyatalab', '$handpump_count','$tehsil_name','$head_contacts','$total_area', '$primaryschools', '$secondary_school', '$highersecondary', '$malestudents', '$femalestudents', '$anganwadi_count',    '$policestation', '$policechowki')";
    $result = mysqli_query($con, $q);

    if ($result) {
        echo 'Data inserted';
    } else {
        echo 'Operation failed: ' . mysqli_error($con); 
    }
   }

 ?>



 <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Grampanchyat Data Management</title>
    <link rel="stylesheet" href="formm8.css">
    
  </head>
 

 <body>


 <div class="container">
 <div class="section">
    <div class="heading">
        <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo">
        <h2><u><b>ग्राम पंचायत डाटा मैनेजमेंट</b></u></h2>
        <br><br>
        <h2><strong>कार्यालय ग्राम पंचायत </strong></h2><br>
        <h3>ग्राम पंचायत फॉर्म</h3>
    </div>
    <br>
    

    
    <form action="form4.php" method="post">
     
              
      <div> 
        <br><br>
        <label>दिनांक:</label>
          <input type="date" class="input" name="date" id="date" oninput="getdateValue()">

          <label> को ग्राम पंचायत के ग्राम:</label>
          <input type="text" class="input" name="grampanchayat" id="grampanchayat" oninput="getdataValue()">
          <label>ग्राम:</label>
          <input type="text" class="input" name="gram" id="gram" oninput="getgramValue()">

          <label>ग्राम सभा का आयोजन श्री:</label>
          <br><br>
          <input type="text" class="input" name="gramsabha" id="gramsabha" oninput="getgramsabhaValue()">
       
           को अध्यक्षता में किया गया बैठक में उपस्थित सदस्यो द्वारा निम्न प्रस्ताव पारित किये गये ।
        <br><br>
        <label >प्रस्ताव:6</label>
        <br><br>
        <input type="text" id="proposalnumber" class ="input" name="proposalnumber"  oninput="getproposalnumbervalue()">

        <label>ग्राम है. पंचायत में पीने के पानी का मुख्य स्त्रोत्त </label>
        <input type="text" id="watersource" class="input" name="watersource"  oninput="getwatervalue()">
         
        <label>है. यहाँ से</label>
        <input type="text" id="river" name="river" class="input" oninput="getrivervvalue()">
        <br><br>
        <label>नदी  होकर गुजरती है .ग्राम पंचायत में कुल कुओ की संख्या:</label>
        <input type="text" id="total_wells" name="total_wells" class="input" oninput="getwellvalue()">
        है.
        <label >निस्तार तालाब:</label>
        <input type="text" id="talab" name="talab" class="input"  oninput="gettalabvalue()">
        <br><br>
        <label >मुख्य तालाब:</label>
        <input type="text" id="main_talab" name="main_talab" class="input" oninput="getmaintalabvalue()">

        <label >एवं हेंडपम्पो की कुल संख्या:</label>
        <input type="text" id="total_handpumps" name="total_handpumps"  class="input" oninput="gethandpumpvalue()">

        <label >ग्राम पंचायत तहसील  </label>
        <input type="text" id="tehsil" name="tehsil" class="input"  oninput="gettehsilvalue()" >

        <label >के अंतर्गत आती है. .यहाँ का हल्का नंबर:</label>
        <input type="text" id="halka_number" name="halka_number"  class="input"  oninput="gethalkavalue()">

        <label > है.भूमि का कुल रकबा:</label>
        <input type="text" id="land_area" name="land_area"  class="input" oninput="getareavalue()">

        <label > है.ग्राम पंचायत में प्राथमिक स्कूल:</label>
        <input type="text" id="primary_school" name="primary_school" class="input"  oninput="getprimaryvalue()">

        <label >माध्यमिक स्कूल:</label>
        <input type="text" id="middle_school" name="middle_school" class="input"  oninput="getmiddlevalue()">

        <label>हाई स्कूल एवं:</label>
        <input type="text" id="high_school" name="high_school" class="input"  oninput="gethighervalue()">

        <label >हायर सेकंड्री स्कूल है. जिसमें:</label>
        <input type="text" id="malestudents" name="malestudents"  class="input" oninput="gettvalue()">
        

        <label >छात्र </label>
        <input type="text" id="student" name="student" class="input"  oninput="getstudentvalue()">
        छात्राए अध्यनरत है. 


        <label >आंगनवाड़ीयो की संख्या:</label>
        <input type="text" id="anganwadi" name="anganwadi" class="input" oninput="getanganwadivalue()">

        <label >ग्राम पंचायत</label>
        <input type="text" id="police_station" name="police_station" class="input" oninput="getpolicevalue()">
        
        <label > पुलिस थाना</label>
        <input type="text" id="police_chowki" name="police_chowki" class="input" oninput="getpolicvalue()">
        पुलिस चौकी क्षेत्र के अंतर्गत आती है ।
     <br><br>
     <div class="col-1">
        <input type="submit" value="Submit" class="btn">
     </div>
           
    </form>
</div>


</div>
<div width="450px" height="500px">
    <?php
    echo'<!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
    <body>
    <form action="form4.php" method="post">
    
    <div class="section">
    <div class="heading">
    <img src="https://seeklogo.com/images/M/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo">
    <h2><u><b>ग्राम पंचायत डाटा मैनेजमेंट</b></u></h2>
    <br><br>
    <h2><strong>कार्यालय ग्राम पंचायत </strong></h2><br>
 </div>
    <p style="margin-left:1em;"><b>दिनांक:</b>
    <span id="resultdate"> dd/mm/yy </span>
    <b> को ग्राम पंचायत के ग्राम:</b>
    <span id="resultgrampanchayat"> ग्राम पंचायत के ग्राम </span>
    <b>ग्राम:</b>
    <span id="resultgram"> ग्राम: </span> 
    <b>ग्राम सभा का आयोजन श्री:</b>
    <span id="resultgramsabha">अध्यक्ष</span>
    <b> को अध्यक्षता  में किया गया बैठक में उपस्थित सदस्यो द्वारा निम्न प्रस्ताव पारित किये गये</b>
    <br><br>
    <b>प्रस्ताव:6</b>
    <br><br>
   <span id="resultproposalnumber">ग्राम है </span> 
   <b>ग्राम है. पंचायत में पीने के पानी का मुख्य स्त्रोत्त  </b>
   <span id="resultwatersource">मुख्य स्त्रोत्त</span> 
   <b>है. यहाँ से </b>
   <span id="resultriver">नदी</span>
   <b>नदी होकर गुजरती है.ग्राम पंचायत में कुल कुओ की संख्या:</b>
   <span id="resultwell">  कुओ की संख्या</span>
   <b>है.निस्तार तालाब:</b>
   <span id="resultnistartalab"> निस्तार तालाब</span> 
   <b>मुख्य तालाब:</b>
   <span id="resultmaintalab">मुख्य तालाब </span> 
   <b>एवं हेंडपम्पो की कुल संख्या है.</b>
   <span id="resulthandpumps"> हेंडपम्पो संख्या</span>
   <b>ग्राम पंचायत </b>
   <span id="resultehsil"> तहसील </span> 
   <b>तहसील के अंतर्गत आती है यहाँ का हल्का नंबर</b>
   <span id="resultheadnumber">नंबर </span> 
   <b>है. भूमि का कुल रकबा</b>
   <span id="resultarea"> रकबा </span> 
   <b>है. ग्राम पंचायत में प्राथमिक स्कूल:</b>
   <span id="resultprimary">प्राथमिक स्कूल</span> 
   <b>माध्यमिक स्कूल</b>
   <span id="resultmiddle">माध्यमिक स्कूल </span>
   <b>हाई स्कूल एवं:</b>
   <span id="resulthigh">हाई स्कूल एवं:</span>
   <b>हायर सेकंड्री स्कूल है. जिसमें:</b>
   <span id="resultmalestudent">छात्र</span>
   <b>छात्र</b>
   <span id="resultfemalestudent">छात्राए </span>
   <b>छात्राए अध्यनरत है. आंगनवाड़ीयो की संख्या:</b>
   <span id="resultanganwadi"> आंगनवाड़ीयो की संख्या</span>
   <b>है.ग्राम पंचायत</b>
   <span id="resultpolice">पुलिस थाना </span>
   <b>पुलिस थाना</b>
   <span id="resultpolicechoki">पुलिस चौकी </span>
   <b>क्षेत्र के अंतर्गत आती है</b>
   </p>
   <br><br>
   <div class="col-1">
        <input type="submit" value="Submit & print" class="btn">
    </div>
           
  
 </form>
 </div>
 </body>
 </html>';

    ?>
    </div>
         <script>
         function getdateValue() {
            let txtdate= document.getElementById("date");
            let txtdateValue = txtdate.value;

            let resultIndate = document.getElementById("resultdate");
            resultIndate.innerText = txtdateValue;
         }
         </script>
         <script>
         function getdataValue() {
            let txtgrampanchayat= document.getElementById("grampanchayat");
            let txtgrampanchayatValue = txtgrampanchayat.value;

            let resultIngrampanchayat = document.getElementById("resultgrampanchayat");
            resultIngrampanchayat.innerText = txtgrampanchayatValue;
         }
         </script>
         <script>
         function getgramValue() {
            let txtgram= document.getElementById("gram");
            let txtgramValue = txtgram.value;

            let resultIngram = document.getElementById("resultgram");
            resultIngram.innerText = txtgramValue;
         }
         </script>
              
         <script>
         function getgramsabhaValue() {
            let txtgramsabha= document.getElementById("gramsabha");
            let txtgramsabhaValue = txtgramsabha.value;

            let resultIngramsabha = document.getElementById("resultgramsabha");
            resultIngramsabha.innerText = txtgramsabhaValue;
         }
         </script>
              
         <script>
         function getproposalnumbervalue() {
            let txtproposalnumber= document.getElementById("proposalnumber");
            let txtproposalnumberValue = txtproposalnumber.value;

            let resultInproposalnumber = document.getElementById("resultproposalnumber");
            resultInproposalnumber.innerText = txtproposalnumberValue;
         }
         </script>
         <script>
         function getwatervalue() {
            let txtwatersource= document.getElementById("watersource");
            let txtwatersourceValue = txtwatersource.value;

            let resultInwatersource = document.getElementById("resultwatersource");
            resultInwatersource.innerText = txtwatersourceValue;
         }
         </script>
         <script>
         function getrivervvalue() {
            let txtriver= document.getElementById("river");
            let txtriverValue = txtriver.value;

            let resultInriver = document.getElementById("resultriver");
            resultInriver.innerText = txtriverValue;
        }
         </script>
         <script>
         function getwellvalue() {
            let txttotal_wells= document.getElementById("total_wells");
            let txttotal_wellsValue = txttotal_wells.value;

            let resultIntotal_wells = document.getElementById("resultwell");
            resultIntotal_wells.innerText = txttotal_wellsValue;
         }
         </script>
          <script>
         function gettalabvalue() {
            let txttalab= document.getElementById("talab");
            let txttalabValue = txttalab.value;

            let resultIntalab = document.getElementById("resultnistartalab");
            resultIntalab.innerText = txttalabValue;
         }
         </script>
         <script>
         function getmaintalabvalue() {
            let txtmain_talab= document.getElementById("main_talab");
            let txtmain_talabValue = txtmain_talab.value;

            let resultInmain_talab = document.getElementById("resultmaintalab");
            resultInmain_talab.innerText = txtmain_talabValue;
         }
         </script>
         <script>
         function gethandpumpvalue() {
            let txttotal_handpumps= document.getElementById("total_handpumps");
            let txttotal_handpumpsValue = txttotal_handpumps.value;

            let resultIntotal_handpumps = document.getElementById("resulthandpumps");
            resultIntotal_handpumps.innerText = txttotal_handpumpsValue;
         }
         </script>
         <script>
         function gettehsilvalue() {
            let txttehsil= document.getElementById("tehsil");
            let txttehsilValue = txttehsil.value;

            let resultIntehsil = document.getElementById("resultehsil");
            resultIntehsil.innerText = txttehsilValue;
         }
         </script>
         <script>
         function gethalkavalue() {
            let txthalka_number= document.getElementById("halka_number");
            let txthalka_numberValue = txthalka_number.value;

            let resultInhalka_number = document.getElementById("resultheadnumber");
            resultInhalka_number.innerText = txthalka_numberValue;
         }
         </script>
         <script>
         function getareavalue() {
            let txtland_area= document.getElementById("land_area");
            let txtland_areaValue = txtland_area.value;

            let resultInland_area = document.getElementById("resultarea");
            resultInland_area.innerText = txtland_areaValue;
         }
         </script>
         <script>
         function getprimaryvalue() {
            let txtprimary_school= document.getElementById("primary_school");
            let txtprimary_schoolValue = txtprimary_school.value;

            let resultInprimary_school = document.getElementById("resultprimary");
            resultInprimary_school.innerText = txtprimary_schoolValue;
         }
         </script>
         <script>
         function getmiddlevalue() {
            let txtmiddle_school= document.getElementById("middle_school");
            let txtmiddle_schoolValue = txtmiddle_school.value;

            let resultInmiddle_school = document.getElementById("resultmiddle");
            resultInmiddle_school.innerText = txtmiddle_schoolValue;
         }
         </script>
         <script>
         function gethighervalue() {
            let txthigh_school= document.getElementById("high_school");
            let txthigh_schoolValue = txthigh_school.value;

            let resultInhigh_school = document.getElementById("resulthigh");
            resultInhigh_school.innerText = txthigh_schoolValue;
         }
         </script>
         <script>
         function gettvalue() {
            let txtmalestudents= document.getElementById("malestudents");
            let txtmalestudentsValue = txtmalestudents.value;

            let resultInmalestudents = document.getElementById("resultmalestudent");
            resultInmalestudents.innerText = txtmalestudentsValue;
         }
         </script>
         <script>
         function getstudentvalue() {
            let txtstudent= document.getElementById("student");
            let txtstudentValue = txtstudent.value;

            let resultInstudent = document.getElementById("resultfemalestudent");
            resultInstudent.innerText = txtstudentValue;
         }
         </script>
         <script>
         function getanganwadivalue() {
            let txtanganwadi= document.getElementById("anganwadi");
            let txtanganwadiValue = txtanganwadi.value;

            let resultInanganwadi = document.getElementById("resultanganwadi");
            resultInanganwadi.innerText = txtanganwadiValue;
         }
         </script>
         <script>
         function getpolicevalue() {
            let txtpolice_station= document.getElementById("police_station");
            let txtpolice_stationValue = txtpolice_station.value;

            let resultInpolice_station = document.getElementById("resultpolice");
            resultInpolice_station.innerText = txtpolice_stationValue;
         }
         </script>
         <script>
         function getpolicvalue() {
            let txtpolice_chowki= document.getElementById("police_chowki");
            let txtpolice_chowkiValue = txtpolice_chowki.value;

            let resultInpolice_chowki = document.getElementById("resultpolicechoki");
            resultInpolice_chowki.innerText = txtpolice_chowkiValue;
         }
         </script>
        
 </div>
 </body>
 </html>
