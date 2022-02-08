<?php include("redirect.php"); 
include("connect.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | Binary Tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> 
  <?php include("headerDash.php"); ?>
  <style>
#card
{
  height: 320px;
}
@media only screen and (max-width: 750px) {
  #card {
    height: 300px;
  }
}
</style>
</head>

<body>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
      <form action="dashboard.php" method="POST">
        <div class="input-group md-form form-sm form-1 pl-0">
        <input class="form-control my-0 py-1 w-80" name="search" type="text" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-success w-20" name="submit">Search</button>
        </div>
      </form>
      </div>
    </section>
    <!-- End Breadcrumbs -->


  </main><!-- End #main -->

 <!-- course -->

 <?php 
if(isset($_POST['submit']))
{
  $search=$_POST['search'];
  $query="SELECT * FROM onlinecourse where courseName like '%$search%' or courseTutor like '%$search%' ";
  $queryfire=mysqli_query($conn, $query);
  $num=mysqli_num_rows($queryfire);
}
else{
$query="SELECT * FROM onlinecourse order by courseId";
$queryfire=mysqli_query($conn, $query);
$num=mysqli_num_rows($queryfire);
}
?>
  <section id="dashboard" class="portfolio-details">
      <div class="container-fluid bg-light">
      <div class="row p-3">
      <?php
        if($num>0){
          while($product=mysqli_fetch_array($queryfire)){
        ?>
        <div  class="col-lg-2 col-md-2 col-6 p-1">
        <div class="card d-flex" id="card">
        <form class="form-signin" action="onlineCourse.php" method="GET">
        <img class="card-img-top" src="https://img.youtube.com/vi/<?php echo $product['courseImg']; ?>/hqdefault.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title text-primary"><?php echo $product['courseName'];?></h6>
            <p class=" text-muted">By :  <?php echo $product['courseTutor'];?><br>
            </p>
            
            <input type="hidden" name="courseCode" value="<?php echo  $product['courseId'];?>">
            <button type="submit" class="btn btn-outline-danger w-100" value="submit" name="GoTo">Watch Now</button>
        
            </form>
        </div>
        </div>
        </div>
        <?php 
      }
    }
    else
    {
      echo "result not found data";
    }
    ?>
      </div>
      </div>
    </section>
<?php include("footerDash.php"); ?>


</body>

</html>