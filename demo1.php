<?php include("headerDash.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | Binary Tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> 
  <?php include("headerDash.php"); ?>

</head>
<body>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="dashboard.html">Dashboard</a></li>
        </ol>

      </div>
    </section>
    <!-- End Breadcrumbs -->


  </main><!-- End #main -->
<form action="demo.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>