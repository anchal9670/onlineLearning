<?php include("redirect.php"); 
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Course | Binary Tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include("headerDash.php"); ?>
  <style>
  #scroll {
  height: 450px;
  background-color: #eee;
  overflow-x: hidden; /* Hide horizontal scrollbar */
  overflow-y: scroll;
}
#btnn
{
  width: 50%;
}
#playon
{
  height: 450px;
}
@media only screen and (max-width: 750px) {
  #playon {
    height: 300px;
  }
  #btnn
  {
    width: 100%;
  }
}
</style>
</head>

<body>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Course</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->
    <?php
    if(isset($_GET['GoTo']))
    {
      $course=$_GET['courseCode'];
      $query="SELECT * FROM onlineshow where courseId='$course'";
      $queryfire=mysqli_query($conn, $query);
      $num=mysqli_num_rows($queryfire);

      $query1=mysqli_query($conn,"SELECT * FROM onlinecourse where courseId='$course'");
      $row = mysqli_fetch_array($query1);
      $video=$row['courseImg'];
    }
    if(isset($_GET['watch']))
    {
      $course=$_GET['courseId'];
      $number=$_GET['LectureNo'];
      $query="SELECT * FROM onlineshow where courseId='$course'";
      $queryfire=mysqli_query($conn, $query);
      $num=mysqli_num_rows($queryfire);

      $query1=mysqli_query($conn,"SELECT * FROM onlineshow where courseId='$course' and LectureNo=$number");
      $row = mysqli_fetch_array($query1);
      $video=$row['LactureImg'];
    }
    ?>
  </main><!-- End #main -->
  <section id="dashboard" class="portfolio-details ">
      <div class="container-fluid bg-light">
      <div class="row">
        <div  class="col-lg-7 col-md-12 col-12">
       
        <iframe width="100%" id="playon"
        src=" https://www.youtube.com/embed/<?php echo $video; ?>?start=0&feature=oembed&controls=1&hd=1&autohide=1&autoplay=1&rel=0&showinfo=0&modestbranding=1&iv_load_policy=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>

        </div>
        <div  class="col-lg-5 col-md-12 col-sm-12 p-1 " id="scroll" >
        <div class="card d-flex" >
        <div class="card-body">
        <?php
        if($num>0){
          while($product=mysqli_fetch_array($queryfire)){
        ?>
         <form class="form-signin" action="onlineCourse.php" method="GET">
          <div class="card d-flex " >
          <div class="card-body">
            <div class="member d-flex align-items-start" >
              <div class="pic p-2 col-lg-3 "><img src="https://img.youtube.com/vi/<?php echo $product['LactureImg']; ?>/hqdefault.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h6 class="card-title text-primary"><?php echo $product['LectureName'];?></h6>
              
              <input type="hidden" name="LectureNo" value="<?php echo  $product['LectureNo'];?>">
              <input type="hidden" name="courseId" value="<?php echo  $product['courseId'];?>">
              <button type="submit" class="btn btn-danger " id="btnn" value="submit" name="watch">Watch Now </button>
              </div>
              
            </div>
          </div>
          </div>
         </form>
            <?php 
            }
          }
           ?>
        </div>
        </div>
        </div>
      
      </div>
      </div>
    </section>
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

</body>

</html>