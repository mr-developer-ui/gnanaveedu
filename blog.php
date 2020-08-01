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
                     <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                  </ol>
                  <h2 class="h1">
                    Blog
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
                    $blogshow="SELECT * FROM blogdetail ORDER BY blogid";
                    $blogresult = $DBcon->query($blogshow);
                	while($blogrow = $blogresult->fetch_assoc()) { ?>
                        <div class="col-lg-6">
                            <div class="blog-single-item">
                                        <div class="blog-item-inner">
                                            <div class="blog-img">
                                                <img src="admin/<?php echo $blogrow['blogimg'] ?>" alt="">        
                                            </div>
                                            <div class="blog-detail">       
                                                <div class="blog-meta">
                                                    <h6 class="d-flex"><a href="blog-detail.php?pgid=<?php echo $blogrow['blogid'];?>"><?php echo $blogrow['blogdate'] ?></a><a href="blog-detail.php?pgid=<?php echo $blogrow['blogid'];?>">Admin</a>
                                                </div>  
                                                <h5><?php echo $blogrow['blogtitle'] ?></h5>   
                                                <p><?php echo $blogrow['blogshortdescri'] ?></p> 
                                                <a href="blog-detail.php?pgid=<?php echo $blogrow['blogid'];?>" class="blog-more">Read More</a>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        
				<?php
					}
				?>
                        <!-- <div class="col-md-12">
                            <div class="pagination-area d-flex justify-content-center margin-top-50">
                                <ul>
                                    <li>
                                        <span class="next page-bumber"><i class="fa fa-angle-left"></i> Prev</span>
                                    </li>
                                    <li>
                                        <span class="page-bumber">1</span>
                                    </li>
                                    <li>
                                        <span class="page-bumber current">2</span>
                                    </li>
                                    <li>
                                        <span class="page-bumber">3</span>
                                    </li>
                                    <li>
                                        <span class="next page-bumber">Next <i class="fa fa-angle-right"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
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