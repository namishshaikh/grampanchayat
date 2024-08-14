<!DOCTYPE html>
<html>
    <head>
        <title>Form 2 data display</title>
        <link rel="stylesheet" href="form6_fetch.css">
    </head>
    <body>
        <div class="container">
            <h1>कार्य की जानकारी</h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="कार्य खोजे">
          <table id="myTable">
            <tr>
              <th>id</th>
                <th>कार्य का नाम</th>
                <th>योजना का नाम</th>
                <th>कुल राशि</th>
                <th>व्यय राशि</th>
                <th>वर्ष</th>
                <th>विभाग का नाम</th>
            </tr>

          <script>
        function GeneralInfo(){
                      <?php
                        $con= mysqli_connect('localhost', 'root','');
                        mysqli_select_db($con,'gram_panchayat');
                        $q1="select * from work";
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
                      <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['wname']; ?></td>
                        <td><?php echo $row['yname']; ?></td>
                        <td><?php echo $row['tamount']; ?></td>
                        <td><?php echo $row['vamount']; ?></td>
                        <td><?php echo $row['yearrr']; ?></td>
                        <td><?php echo $row['dname']; ?></td>
                        
                        
                            <?php $wname=$row['wname'];?>
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