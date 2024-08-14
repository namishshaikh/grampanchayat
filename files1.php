<?php
    // error_reporting(0);
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'gram_panchayat');

    if (isset($_POST['submit']) && isset($_FILES['sss_']) &&isset($_FILES['adhr_']) && isset($_FILES['image_'])){

        $sss_= $_POST['sss_'];
        $adhr_= $_POST['adhr_'];
        $image_= $_POST['image_'];
        $adhr_no=$_POST['adhar_no'];

         

            //samagra
            $img_name = $_FILES['sss_']['name'];
            $img_size = $_FILES['sss_']['size'];
            $tmp_name = $_FILES['sss_']['tmp_name'];
            $error =$_FILES['sss_']['error'];

            if($error === 0) {
                if($img_size >12500000) {
                    $em = "Sorry, your file is too large.";
                
                }
                else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc =strtolower($img_ex);
                    $allowed_exs = array("pdf","doc","docx");
    
                    if (in_array($img_ex_lc, $allowed_exs)){
                        $new_img_name_1 = uniqid("Samagra-",true).'.'.$img_ex_lc;
                        $img_upload_path = 'member_doc/'.$new_img_name_1;
                        move_uploaded_file($tmp_name, $img_upload_path);

                //         $q="insert into files(samag_doc) VALUES ('$new_img_name')";
                //         $result=mysqli_query($con,$q);
                //          echo "uploaded";
                //    }else{
                //                 $em = "You can't upload files of this type";
                //             }
                 }
            }
        }
       

                        // adhr

                        $img_name = $_FILES['adhr_']['name'];
                        $img_size = $_FILES['adhr_']['size'];
                        $tmp_name = $_FILES['adhr_']['tmp_name'];
                        $error =$_FILES['adhr_']['error'];
            
                        if($error === 0) {
                            if($img_size >12500000) {
                                $em = "Sorry, your file is too large.";
                            }else {
                                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                $img_ex_lc =strtolower($img_ex);
            
                                $allowed_exs = array("pdf","doc","docx");
                
                                if (in_array($img_ex_lc, $allowed_exs)){
                                    $new_img_name_2 = uniqid("adhar-",true).'.'.$img_ex_lc;
                                    $img_upload_path = 'member_doc/'.$new_img_name_2;
                                    move_uploaded_file($tmp_name, $img_upload_path);
            
                                    // $q="insert into files(adhar_doc) VALUES ('$new_img_name')";
                                    // $result=mysqli_query($con,$q);
                                    //  echo "uploaded";
                                    //     }else{
                                    //         $em = "You can't upload files of this type";
                                    //     }
                                    }
                                }
                            
                        

                                    // images


                                    $img_name = $_FILES['image_']['name'];
                                    $img_size = $_FILES['image_']['size'];
                                    $tmp_name = $_FILES['image_']['tmp_name'];
                                    $error =$_FILES['image_']['error'];
                        
                                    if($error === 0) {
                                        if($img_size >12500000) {
                                            $em = "Sorry, your file is too large.";
                                        }else {
                                            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                            $img_ex_lc =strtolower($img_ex);
                        
                                            $allowed_exs = array("png","jpeg","jpg");
                            
                                            if (in_array($img_ex_lc, $allowed_exs)){
                                                $new_img_name_3 = uniqid("IMG-",true).'.'.$img_ex_lc;
                                                $img_upload_path = 'member_doc'.$new_img_name_3;
                                                move_uploaded_file($tmp_name, $img_upload_path);
                        
                                                
                                        }
                                        }

                                        $q="insert into documents(adhar_no,samagra_docc,adhar_doc,image_url,) VALUES ('$adhr_no','$new_img_name_1','$new_img_name_2','$new_img_name_3')";
                                        $result=mysqli_query($con,$q);
                                         echo "uploaded";
                                            }else{
                                                $em = "You can't upload files of this type";
                                            }
                        if($result){
                            echo "<script> alert('data inserted successfully') </script>";
                        
                        }
                        else{
                            echo 'operation failed';
                        }

            } 
        }    
        

       
?>