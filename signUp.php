<?php include('connect.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign_Up | Binary Tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/binary.jpeg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
    .card-container.card {
    max-width: 450px;
    padding: 40px 40px;
    }
    .profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    }

    /*
    * Form styles
    */
    .profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
    }

    .reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    }

    .form-signin #inputEmail,
    .form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
    }

    .form-signin input[type=email],
    .form-signin input[type=password],
    .form-signin input[type=text],
    .form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    }

    .form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    }

    .btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
    }

    .btn.btn-signin:hover,
    .btn.btn-signin:active,
    .btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
    }

    .forgot-password {
    color: rgb(104, 145, 162);
    }

    .forgot-password:hover,
    .forgot-password:active,
    .forgot-password:focus{
    color: rgb(12, 97, 33);
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Binary Tech</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Project</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Android</a></li>
              <li class="dropdown"><a href="#"><span>Internship</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <li><a href="#">Web Development</a></li>
                  <li><a href="#">Android Development</a></li>
                  <li><a href="#">Front End Developer</a></li>
                  <li><a href="#">Back End Developer</a></li>
                  <li><a href="#">Digital Markrting </a></li>
                </ul>
              </li>
              <li><a href="#">E-Commerce</a></li>
              <li><a href="#">Service Apps</a></li>
              <li><a href="#">Games</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="signIn.php">Login</a></li>
          <li><a class="getstarted scrollto" href="signUp.php">Sign_Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Sign Up</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="SignUp" class="portfolio-details">
      <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="assets/img/team/team-3.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="signUpAction.php" method="POST">

                <input type="text" id="inputFirstName" name="firstName" class="form-control" onkeyup="GetDetail(reflerCode.value)" placeholder="Enter First Name" required autofocus>
                <input type="text" id="inputLastName" name="lastName" class="form-control" placeholder="Enter Last Name" required >

                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Enter Email Address" required >
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Enter Password" required >
                <input type="text" id="reflerCode" name="reflerCode" onkeyup="GetDetail(this.value)" value="<?php echo isset($_GET['reflerCode'])?$_GET['reflerCode']:''?>" class="form-control" placeholder="Enter Refler Id" >
                <!-- Search Refler Name -->
                <!--Refferal Link http://localhost/download_first/signUp.php?reflerCode=12333 -->
                <input type="hidden" id="reflerName" name="reflerName" value=""  class="form-control" >
                <input type="text" id="reflerName1" name="reflerName1" value="" placeholder="Refler Name" class="form-control" disabled>
                <!-- end search -->
                <input type="mob" id="inputMob" name="mob" pattern="[0-9]{10}" class="form-control" placeholder="Enter Mobile no." required >
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="signUp" type="submit">Sign Up</button>
            </form><!-- /form -->
         
        </div><!-- /card-container -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Binary Tech</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!--Search Refler Name With Js CODE -->
  <script>
  function GetDetail(str) {
    if (str.length == 0) {
        document.getElementById("reflerName").value = "";
        document.getElementById("reflerName1").value = "";
        
        

        return;
    }
    else {

        // Creates a new XMLHttpRequest object
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {

            // Defines a function to be called when
            // the readyState property changes
            if (this.readyState == 4 &&
                    this.status == 200) {
                
                // Typical action to be performed
                // when the document is ready
                var myObj = JSON.parse(this.responseText);

                // Returns the response data as a
                // string and store this array in
                // a variable assign the value
                // received to first name input field
                
                document.getElementById(
                    "reflerName").value = myObj[0];
                document.getElementById(
                        "reflerName1").value = myObj[1];
                
              
            }
        };

        // xhttp.open("GET", "filename", true);
        xmlhttp.open("GET", "signUpGfg.php?reflerCode=" + str, true);
        
        // Sends the request to the server
        xmlhttp.send();
    }
  }
  </script>

</body>

</html>