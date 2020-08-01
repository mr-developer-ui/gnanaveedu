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
                     <li class="breadcrumb-item">Blog Detail</li>
                  </ol>
                  <h2 class="h1">
                    Blog Detail
                  </h2>
               </div>
            </div>
         </div>
</div>
<!-- breadcrumb -->


<!-- blog -->
<div class="blog-details-area pd80">
        <div class="container">
                    <div class="row">

                    <?php
                    $pgid=$_GET['pgid'];
                    $blogshow="SELECT * FROM blogdetail where blogid='$pgid'";
                    $blogresult = $DBcon->query($blogshow);
                	while($blogrow = $blogresult->fetch_assoc()) { ?>
                        <div class="col-lg-12">
                            <div class="blog-single-item">
                                        <div class="blog-item-inner">
                                            <div class="blog-img">
                                                <img src="admin/<?php echo $blogrow['blogimg'] ?>" alt="">        
                                            </div>
                                            <div class="blog-detail">       
                                                <div class="blog-meta">
                                                    <h6 class="d-flex"><a href="#"><?php echo $blogrow['blogdate'] ?></a><a href="#">Admin</a>
                                                </div>  
                                                <h5><?php echo $blogrow['blogtitle'] ?></h5>   
                                                <p><?php echo $blogrow['blogdescri'] ?></p> 
                                            </div>
                                        </div>
                            </div>
                        </div>
                        
				<?php
					}
				?>
                    </div>
        </div>
    </div>
<!-- blog -->


<!-- Footer -->
<?php include'footer.php';?>
<!-- Footer -->
<!-- footer link -->
<?php include'footer-link.php';?>
<!-- footer link -->

</body>
</html>