<?php include("TeachRedirect.php"); 
include("connect.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Course | Binary Tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> 
  <?php include("TeachHeader.php"); ?>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
      </div>
    </section>
    <!-- End Breadcrumbs -->
    <section id="SignUp" class="portfolio-details">
      <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="assets/img/team/team-3.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="TeachAddAction.php" method="POST">

                <input type="text" id="inputFirstName" name="firstName" class="form-control" placeholder="Course Title" required autofocus>
                <input type="area" id="inputLastName" name="courseDis" class="form-control" placeholder="Course Discription" required >

                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Co" required >
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Enter Password" required >
                <input type="text" id="reflerCode" name="reflerCode" onkeyup="GetDetail(this.value)" value="<?php echo isset($_GET['reflerCode'])?$_GET['reflerCode']:''?>" class="form-control" placeholder="Enter Refler Id" >
                <!-- Search Refler Name -->
                <!--Refferal Link http://localhost/download_first/signUp.php?reflerCode=12333 -->
                <input type="hidden" id="reflerName" name="reflerName" value=""  class="form-control" >
                <input type="text" id="reflerName1" name="reflerName1" value="" placeholder="Refler Name" class="form-control" disabled>
                <!-- end search -->
                <input type="mob" id="inputMob" name="mob" pattern="[0-9]{10}" class="form-control" placeholder="Enter Mobile no." required >
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="AddCourse" type="submit">Add Course</button>
            </form><!-- /form -->
         
        </div><!-- /card-container -->
      </div>
    </section>

  </main><!-- End #main -->
 
    
     
<?php include("footerDash.php"); ?>


</body>

</html>