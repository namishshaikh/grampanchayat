

<div class="main">
<!DOCTYPE html>
<html>

<head>
 
<title> Form 6 display</title>
<link rel="stylesheet" href="form6_fetch.css">
</head>

<body>
  <div class="container">
      <h2><b> shaskiya sanstha</b></h2>
      <input type="text" id=myInput onkeyup="myFunction()" placeholder="Vibhag ka nam">


      <table id="myTable">
        <tr>
            <th>
                S.no
            </th>
            <th>
                Vibhag name
            </th>
            <th>
                Sansad name
            </th>
            <th>
                address
            </th>
        </tr>

        <script>
              function GeneralInfo() {
                      <?php
                       $con = mysqli_connect('localhost', 'root', '');
          mysqli_select_db($con, 'gram_panchayat');
          $q1 = "select * from govt_office ORDER BY id";
          $result = mysqli_query($con,$q1);
          $num1 = mysqli_num_rows($result);
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
 <td>
<?php echo $row['id']; ?>
</td>
<td>
<?php echo $row['dept_name']; ?>
</td>
<td>
<?php echo $row['sansad_name']; ?>
</td>
<td>
<?php echo $row['address']; ?>
</td>

   <?php
    $vibhag=$row["dept_name"];
    ?>
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
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        }
        else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  </script>

</div>