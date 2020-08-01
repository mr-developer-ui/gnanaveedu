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
                     <li class="breadcrumb-item"><a href="gallery-photos.php">Gallery Photos</a></li>
                  </ol>
                  <h2 class="h1">
                    Gallery Photos
                  </h2>
               </div>
            </div>
         </div>
</div>
<!-- breadcrumb -->

<!-- gallery -->
<section class="pd50">
    <div class="container">
        <div class="portfolio-menu mt-2 mb-4">
            <ul>
			<?php
                $detailshow="SELECT * FROM galleryimagedetail GROUP BY categoryid ORDER BY galleryimgid";
                $result = $DBcon->query($detailshow);
                while($row = $result->fetch_assoc()) { ?>
			   <li class="btn gallery-btn text" data-filter="#tab_<?php echo $row['categoryid'] ?>"><?php echo $row['categoryname'] ?></li>
			<?php
				}
			;?>  
            </ul>
        </div>
        
        <div class="portfolio-item row">

			<!-- image -->
			<?php
                $detailshow1="SELECT * FROM galleryimagedetail ORDER BY galleryimgid";
                $result1 = $DBcon->query($detailshow1);
                while($row = $result1->fetch_assoc()) { ?>
            <div class="item col-lg-4 col-md-6" id="tab_<?php echo $row['categoryid'] ?>">
                <div class="proj-hm">
					<img src="admin/<?php echo $row['galleryimage'] ?>" class="img-fluid" alt="">
						<!-- over -->
						<div class="proj-hm-over">
							<div class="proj-hm-over-txt">
								<a class="spotlight" href="admin/<?php echo $row['galleryimage'] ?>">
									<i class="fa fa-search-plus"></i>
								</a>
							</div>
						</div>
						<span class="tl"></span>
						<span class="tr"></span>
						<span class="bl"></span>
						<span class="br"></span>
						<!-- over -->
				</div> 
            </div>
			<?php
				}
			;?> 
			<!-- image -->
			
        </div>

    
    </div>
</section>
<!-- gallery  -->

<!-- Footer -->
<?php include'footer.php';?>
<!-- Footer -->
<!-- footer link -->
<?php include'footer-link.php';?>
<!-- footer link -->

</body>
</html>