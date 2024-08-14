<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="form3_display.css">
    
</head>
        <title> Form 3 display</title>
    </head>
    <body>
        <div class="container">
            <h1>ग्राम पंचायत की सामान्य जानकारी</h1>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="कार्य खोजे">
                <input type="button" onclick="export_data()" value="Export">
                <table id="myTable">
                    <tr>
                        <th>सम्मिलित ग्राम :</th>
                        <th>ग्राम पंचायत की कुल जनसंख्या </th>
                        <th>ग्राम पंचायत में पुरुषों की संख्या :</th>
                        <th>ग्राम पंचायत में महिला की संख्या :</th>
                        <th>ग्राम पंचायत में बच्चों की संख्या :</th>
                        <th>ग्राम पंचायत में वर्गवार संख्या :</th>
                        <th>ग्राम पंचायत की धर्म आधारित संख्या :</th>
                        <th>ग्राम पंचायत में स्थित धार्मिक स्थल :</th>
                        <th>ग्राम पंचायत में कुल वोटर :</th>
                    </tr>
                    <script>
                        function GeneralInfo(){
                      <?php
                        $con= mysqli_connect('localhost', 'root','');
                        mysqli_select_db($con,'gram_panchayat');
                        $q1="select * from general_info";
                        $result=mysqli_query($con,$q1);
                        $num1= mysqli_num_rows($result);
                        mysqli_close($con);
                        ?>  
                    }
                    </script>
                    <?php
                      for($i=0;$i<$num1;$i++)
                      {
                          $row=mysqli_fetch_array($result);
                      ?>
                      <tr>
                          <td><?php echo $row['sammilit_gram']; ?></td>
                          <td><?php echo $row['population']; ?></td>
                          <td><?php echo $row['male_popu']; ?></td>
                          <td><?php echo $row['female_popu']; ?></td>
                          <td><?php echo $row['child_popu']; ?></td>
                          <td><?php echo $row['category_popu']; ?></td>
                          <td><?php echo $row['religion_popu']; ?></td>
                          <td><?php echo $row['religious_place']; ?></td>
                          <td><?php echo $row['total_voters']; ?></td>
                          
                          
                          
                              <?php $sarpanch_name=$row['sammilit_gram'];?>
  
                      </tr>
                      <?php
                      }
                      ?>
                      
	
	
                </table>
                
        </div>
    </body>
    </html>
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.mini.min.js"></script>

<script>
function export_data(){
	let data=document.getElementById('myTable');
	var fp=XLSX.utils.table_to_book(data,{sheet:'book2'});
	XLSX.write(fp,{
		bookType:'xlsx',
		type:'base64'
	});
	XLSX.writeFile(fp, 'test.xlsx');
}
</script>

 