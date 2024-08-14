
<!-- <?php
include'registerimport.php';
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Registration Page</title>
</head>

<body>
    <?php
    // echo $msg;
    ?>
    <div class="glass-form">
        <img src="icon/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" class="logo" alt="Watermark" width="470px" height="470px">
        <h2><u>Register Here</u></h2>
         <form method="post"  enctype="multipart/form-data" > 
      
            <div class="userInputBox">
                <input type="text" id="usernameInputBox" name="user" required>
                <Label for="usernameInputBox">Username</Label>
            </div>

            <div class="userInputBox">
                <input type="password" id="passwordInputBox" name="pass" required>
                <Label for="passwordInputBox">Password</Label>
            </div>
            <div class="userInputBox">
                <input type="password" id="passwordInputBox" name="confirm" required>
                <Label for="confirmPassword">Confirm Password</Label>
            </div>
            <div class="img-container"
                style="display:flex; flex-direction:column; margin-bottom:10px; align-items:center;">
                <input type="file" name="file" id="file" accept="image/*" hidden>
                <div class="img-area" data-img=""
                    style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                    <i class='bx bxs-cloud-upload icon'></i>

                    <div class="userInputBox" style="display: flex; align-items: center;">
                        <input type="file" name="file" id="file" accept="image/*" required>
                        <!-- <Label for="file">Select Photo</Label> -->
                        <!-- <button type="upload" name="upload" style="margin-left: 10px;">Upload</button> -->
                    </div>
                    <br>
                    <div class="submit-button">
                        <input type="submit" name="submit" value="submit">

                    </div>
        </form>
    </div>
</body>

</html>