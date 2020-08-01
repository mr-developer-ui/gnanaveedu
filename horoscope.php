<?php include'admin/config.php';?>
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
                     <li class="breadcrumb-item">Horoscope</li>
                    <?php
                    $pgid=$_GET['pgid'];
                    $editdetail = "SELECT * FROM horoscopedetail where horoscopepageid='$pgid'";
                    $result = $DBcon->query($editdetail);
                    while($row = $result->fetch_assoc()) {
                    ?>
                     <li class="breadcrumb-item"><?php echo $row['zodiacsignname'] ?></li>
                    <?php 
                    }
                    ?>
                  </ol>
                    <?php
                    $pgid=$_GET['pgid'];
                    $editdetail = "SELECT * FROM horoscopedetail where horoscopepageid='$pgid'";
                    $result = $DBcon->query($editdetail);
                    while($row = $result->fetch_assoc()) {
                    ?>
                  <h2 class="h1">
                  <?php echo $row['zodiacsignname'] ?>
                  </h2>
                    <?php 
                    }
                    ?>
               </div>
            </div>
         </div>
</div>
<!-- breadcrumb -->

<!-- container -->
<section class="pd50 horoscope-tab">
    <div class="container">
        <div class="row">
        <!-- col -->
        <div class="col-lg-4">
            <div class="horoscope-tab-btn">
                <ul>

                <?php
                $horoshow="SELECT * FROM horoscopedetail ORDER BY horoscopeid";
                $hororesult = $DBcon->query($horoshow);
                while($hororow = $hororesult->fetch_assoc()) { ?>
                    <li class="inner-tab-horo">
                        <a href="horoscope.php?pgid=<?php echo $hororow['horoscopepageid'];?>">
                            <img src="admin/<?php echo $hororow['zodiacsignimg'] ?>" class="img-horoscope" alt="">
                            <?php echo $hororow['zodiacsignname'] ?>
                        </a>
                    </li>
		        <?php
			    }
		        ;?>	
                </ul>
            </div>
        </div>
        <!-- col -->
        <!-- col -->
        <div class="col-lg-8">
                    <?php
                    $pgid=$_GET['pgid'];
                    $editdetail = "SELECT * FROM horoscopedetail where horoscopepageid='$pgid'";
                    $result = $DBcon->query($editdetail);
                    while($row = $result->fetch_assoc()) {
                    ?>
            <div class="horoscope-cnt">
                <h3><?php echo $row['zodiacsignname'] ?></h3>
                <h5><?php echo $row['zodiacdate'] ?></h5>
                <p><?php echo $row['zodiacsigndetail'] ?></p>
            </div>
		        <?php
			    }
		        ;?>	
        </div>
        <!-- col -->
        </div>
    </div>
</section>
<!-- container -->


<!-- Footer -->
<?php include'footer.php';?>
<!-- Footer -->
<!-- footer link -->
<?php include'footer-link.php';?>
<!-- footer link -->

</body>
</html>