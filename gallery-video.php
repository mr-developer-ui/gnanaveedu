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
                     <li class="breadcrumb-item"><a href="gallery-video.php">Gallery Videos</a></li>
                  </ol>
                  <h2 class="h1">
                    Gallery Videos
                  </h2>
               </div>
            </div>
         </div>
</div>
<!-- breadcrumb -->

<!-- video -->
<section class="pd50">
    <div class="container">
        <div class="row">
        <?php
        $detailshow="SELECT * FROM galleryvideodetail ORDER BY link_id";
        $result = $DBcon->query($detailshow);
        while($row = $result->fetch_assoc()) { ?>
            <!-- col -->
            <div class="col-lg- 6 col-md-6">
            <div class="gallery-video">
            <iframe width="100%" height="280" src="https://www.youtube.com/embed/<?php echo $row['youtube_link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
            <!-- col -->
        <?php       
            }
        ?>
        </div>
    </div>
</section>
<!-- video -->

<!-- Footer -->
<?php include'footer.php';?>
<!-- Footer -->
<!-- footer link -->
<?php include'footer-link.php';?>
<!-- footer link -->

</body>
</html>