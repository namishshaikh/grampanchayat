<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grampanyat dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   

</head>
<body>
   
    <div class="grid-container">
        <header class="header">
            <div class="header__search">Search...</div>
            <div class="header__avatar"><i class='bx bxs-user-circle'></i></div>
        </header>

        

        <aside class="sidenav">
            <div class="logo">
                <img src="icon/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png">
            </div>
            <ul class="sidenav__list">
                <li >
                    <a href="#" >
                        <i class='bx bxs-dashboard'></i>
                        <span class="link_name"  onclick="loadPage('main.php')">Dashboard</span>
                    </a>
                </li>
                
                <li >
                    <a href="#" >
                    <i class='bx bx-message-square-edit'></i>
                        <span class="link_name" onclick="loadPage('register.php')">Register</span>
                    </a>
                </li>
                <li >
                    <div class="iocn-link">
                    <a href="#" >
                        <i class='bx bxs-collection' ></i>
                        <span class="link_name">प्रपत्र</span>
                    </a>
                    <i class='bx bx-chevron-down' ></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a  href="#" onclick="loadPage('form.php')">सदस्य की जानकारी</a></li>
                        <li><a href="#"onclick="loadPage('form3.php')"> ग्राम पंचायत की सामान्य जानकारी</a></li>
                        <li><a href="#" onclick="loadPage('data_management_4.php')"> ग्राम पंचायत के जनप्रतिनिधी</a></li>
                        <li><a href="#" onclick="loadPage('form5.php')"> ग्राम पंचायत में शासकीय संस्था</a></li>
                        <!-- <li><a href="#"> ग्राम पंचायत की सामान्य जानकारी</a></li> -->
                        <li><a href="#" onclick="loadPage('form6.php')"> ग्राम पंचायत में शासकीय सेवक</a></li>
                        <li><a href="#" onclick="loadPage('formm8.php')"> गकार्यालय ग्राम पंचायत</a></li>
                        <li><a href="#"onclick="loadPage('family_head.php')"> परिवार का मुखिया की जानकारी</a></li>
                        <li><a href="#"onclick="loadPage('form7.php')"> ग्राम पंचायत</a></li>
                        
                    </ul>
                </li>
                <li >
                    <a href="#" >
                    <i class='bx bxs-file-export'></i>
                        <span class="link_name" onclick="loadPage('form6_fetch.php')">शासकीय सेवक </span>
                    </a>
                </li>
                <li >
                    <a href="#" >
                    <i class='bx bxs-file-export'></i>
                        <span class="link_name" onclick="loadPage('formdisplay.php')">सामान्य जानकारी </span>
                    </a>
                </li>
                <li >
                    <a href="#" >
                    <i class='bx bxs-file-export'></i>
                        <span class="link_name" onclick="loadPage('form5_fetch.php')">शासकीय संस्था </span>
                    </a>
                </li>
                <li >
                    <a href="#" >
                    <i class='bx bxs-file-plus' ></i>
                        <span class="link_name" onclick="loadPage('data_management_2.php')">Updates Yojna</span>
                    </a>
                </li>
                <li >
                    <a href="#" >
                        <i class='bx bxs-cog' ></i>
                        <span class="link_name">Settings</span>
                    </a>
                </li>
                <li >
                    <a href="homepage.php" >
                        <i class='bx bxs-log-out' ></i>
                        <span class="link_name">Logout</span>
                    </a>
                </li>
                
              </ul>
        </aside>


        <div class="main">
       
        <iframe id="iframe-content" width="100%" height="100%" frameborder="0">
        <div class="dash_main">
            <img src="icon/madhay-pradesh-panchayat-gram-logo-A4166719CE-seeklogo.com.png" >
        </div>
        </iframe>
        
         <!-- <div class="main-header">
                <div class="main-header__heading">Hello User</div>
                <div class="main-header__updates">Recent Items</div> 
           </div> -->

           <!-- <div class="main-overview">
            <div class="overviewcard">
              <div class="overviewcard__icon">Overview</div>
              <div class="overviewcard__info">Card</div>
            </div>
            <div class="overviewcard">
              <div class="overviewcard__icon">Overview</div>
              <div class="overviewcard__info">Card</div>
            </div>
            <div class="overviewcard">
              <div class="overviewcard__icon">Overview</div>
              <div class="overviewcard__info">Card</div>
            </div>
            <div class="overviewcard">
              <div class="overviewcard__icon">Overview</div>
              <div class="overviewcard__info">Card</div>
            </div>
          </div> -->

          <!-- <div class="main-cards">
            <div class="card">Card</div>
            <div class="card">Card</div>
            <div class="card">Card</div>
          </div> -->



        </div>




        <footer class="footer">
            <div class="footer__copyright">&copy; 2018 MTH</div>
            <div class="footer__signature">Made with love by pure genius</div>
        </footer>
     </div>

     <script>
    function loadPage(url) {
        const iframe = document.getElementById("iframe-content");
        iframe.src = url;
    }
</script>



</body>
</html>