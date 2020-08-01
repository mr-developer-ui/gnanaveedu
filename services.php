<?php include 'admin/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include'header-link.php';?>
</head>
<body>
<!-- navigation -->
<?php include'navigation.php';?>
<!-- navigation -->

<!-- breadcrumb -->
<div class="pd50 bg-cover" data-dark-overlay="6" style="background:url(images/breadcrumb/1.png) no-repeat">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 my-2 text-white">
                  <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item">Services</li>
                  </ol>
                  <h2 class="h1">
                    Service Detail 
                  </h2>
               </div>
            </div>
         </div>
</div>
<!-- breadcrumb -->

<!-- services -->
<section class="service-page pd50">
   <div class="container">
   <div class="row">
   
   <?php
      $pgid=$_GET['pgid'];
      $servicedetailshow="SELECT * FROM servicedetail where servicepageid='$pgid'";
      $serviceresult = $DBcon->query($servicedetailshow);
      while($servicerow = $serviceresult->fetch_assoc()) { ?>
   <div class="col-md-12">
      <h2><?php echo $servicerow['servicetitle'] ?></h2>
   </div>
      <div class="col-lg-6">
         <p><?php echo $servicerow['servicedescri'] ?></p>
         <a href="#!" data-toggle="modal" data-target="#enquirymodal" data-dismiss="modal" class="btn-style1">Enquiry Now</a>
      </div>
      <div class="col-lg-6">
         <img src="admin/<?php echo $servicerow['serviceimg'] ?>" class="img-fluid" alt="">
      </div>
   <?php
		}
	?>							
                                
   </div>
   </div>
</section>
<!-- services -->

<!-- Footer -->
<?php include'footer.php';?>
<!-- Footer -->
<!-- footer link -->
<?php include'footer-link.php';?>
<!-- footer link -->

</body>
</html>