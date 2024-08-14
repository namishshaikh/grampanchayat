<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="form6_fetch.css ">
</head>
<title> Form 6 display</title>
</head>

<body>
  <div class="container">
    <h5><b>ग्राम पंचायत में शासकीय सेवक </b></h5>
    
      <input type="text" id="myInput"  onkeyup="myFunction()" placeholder="sansad ka nam">
      <input type="text" id="m_search"  onkeyup="mysearch()" placeholder="vibhag">
    
    <table id="myTable">
      <tr>
        <th>Id</th>
        <th>नाम :</th>
        <th>पद :</th>
        <th>मोबाइल नंबर :</th>
        <th>सांसद :</th>
        <th>विभाग :</th>
      </tr>


      <script>
        function GeneralInfo() {
                      <?php
                       $con = mysqli_connect('localhost', 'root', '');
          mysqli_select_db($con, 'gram_panchayat');
          $q1 = "select * from gov_officer ORDER BY id";
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
          <?php echo $row['name']; ?>
        </td>
        <td>
          <?php echo $row['designation']; ?>
        </td>
        <td>
          <?php echo $row['mob_no']; ?>
        </td>
        <td>
          <?php echo $row['sansad_name']; ?>
        </td>
        <td>
          <?php echo $row['desig']; ?>
        </td>
      

        <?php 
                            $id=$row['id'];
                            $sansad_name=$row['sansad_name'];
                            $vibhag=$row['desig'];
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
      td = tr[i].getElementsByTagName("td")[4];
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
  function mysearch() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("m_search");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[5];
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