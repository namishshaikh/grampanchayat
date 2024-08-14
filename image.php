<?php 

 
if (isset($_POST['upload']) && isset($_FILES['my_image']))
{
   $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'gram_panchayat');

    //   $adhar_no=$_POST('adhar_no');
    //   $samagr_doc=$POST('samagr_doc');
    //   $adhr_doc=$_POST('adhr_doc');

    // echo "<pre>";
    // print_r($_FILES['my_image']);
    // echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error =$_FILES['my_image']['error'];

    if($error === 0) {
        if($img_size >12500000) {
            $em = "Sorry, your file is too large.";
          
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc =strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png");

            if (in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO doc(image_url)
                        VALUES('$new_img_name')";
                mysqli_query($con, $sql);
             
              echo "uploaded";
            }else {
                $em = "You can't upload files of this type";
             
            }
        }
    }
    else {
        $em = "unknown error occurred!";
      //  header("Location: gallery.php?error=$em"); 
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head> 

<body> 
 

                      
                    <div class="col-30">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">समग्र आई.डी.
                        </label>
                        <form action="#" method="POST" enctype="multipart/form-data">
                        <input type="file" name="my_image" class="upload"  multiple>
                        <input type="submit" value="upload" name="upload"   class="btnn">
                        <input type="submit" value="view" name="view_id" class="btn">
                       
                        <!-- <input type="file" name="my_image">
                        <input type="submit" name ="upload" value="Upload"> -->
                        </form>             
                    </div>
                
</body>
</html>