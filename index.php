<?php include'admin/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include'header-link.php';?>
</head>
<body>
<!-- Navigation bar -->
<?php include'navigation.php';?>  
<!-- Navigation -->	  

<!-- section1 -->
<!-- main banner -->
	
<div class="part1">
	<div class="container-fluid">
		<div class="row">
			<div class="owl-carousel maincaro">
				<!-- dynamic -->
				<?php
	$homeslider = "SELECT * FROM mainslider";
	$sliderhome = $DBcon->query($homeslider);

	
    // output data of each row
    while($row = $sliderhome->fetch_assoc()) {
?>
				<div class="item">
					<div class="text text-right">
						<h3>
							<?php echo  $row['slider_title'] ;?>
						</h3>
						<p class="hidden-xs">
							<?php echo  $row['slider_desc'] ;?>
						</p>
					</div>
					<img src="admin/
						<?php echo $row['slider_img'] ;?>" alt="maincaro" class="maincaroimg"/>
					</div>
					<!-- dynamic -->
					<?php
    	
		}
		
	 ?>
				</div>
			</div>
		</div>
	</div>
<!-- main banner -->
<!-- section1 -->
<!-- section 2 -->
<section class="pd80 index-sec2 bg-color1">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<img src="images/home/about-img.png" class="img-fluid" alt="">
			</div>
			<div class="offset-lg-1 col-lg-6">
				<h3 class="pg-title">About Us</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the . Lorem Ipsum has been the industry's standard dummy text ever since</p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the . Lorem Ipsum has been the industry's standard dummy text ever since</p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the . Lorem Ipsum has been the industry's standard dummy text ever since</p>
				<a href="about-us.php" class="btn-style1">Know More</a>
			</div>
		</div>
	</div>
</section>
<!-- section 2 -->
<!-- section 3/horoscop icon -->
<section class="pd80 index-sec3">
	<div class="container">
		<div class="row">
			<!-- col -->
			<div class="col-lg-12">
				<div class="text-center">
					<h3>Choose Your Sign</h3>
					<p>What’s Your Sign? Read Your Daily <br> Horoscope Today</p>
				</div>
			</div>
			<!-- col -->
		<?php
            $horoshow="SELECT * FROM horoscopedetail ORDER BY horoscopeid";
            $hororesult = $DBcon->query($horoshow);
            while($hororow = $hororesult->fetch_assoc()) { ?>
			<!-- col -->
			<div class="col-lg-3">
			<a href="horoscope.php?pgid=<?php echo $hororow['horoscopepageid'];?>">
				<div class="index-sign-box">
					<img src="admin/<?php echo $hororow['zodiacsignimg'] ?>" class="img-sign" alt="">
					<h3><?php echo $hororow['zodiacsignname'] ?></h3>
					<!-- absolute content -->
					<div class="top-left"></div>
					<div class="top-right"></div>
					<div class="bottom-left"></div>
					<div class="bottom-right"></div>
					<!-- absolute content -->
				</div>
				</a>
			</div>
			<!-- col -->
		<?php
			}
		;?>	
		</div>
	</div>
</section>
<!-- section 3/horoscop icon -->
<!-- section 4/services caro -->
<section class="pd80 index-sec4 bg-color1">
	<div class="container">
		<div class="row">
			<!-- col -->
			<div class="col-lg-12">
			<h3>Services</h3>
			</div>
			<!-- col -->
			<!-- col -->
			<div class="col-lg-11">
				<!-- owl caro -->
				<div class="owl-carousel service-caro">
					<!-- item -->

					<?php
                        $servicedetailshow="SELECT * FROM servicedetail ORDER BY serviceid";
                        $serviceresult = $DBcon->query($servicedetailshow);
                        while($servicerow = $serviceresult->fetch_assoc()) { ?>
					<div class="item">
						<div class="index-service">
							<img src="admin/<?php echo $servicerow['serviceimg'] ?>" class="img-fluid" alt="">
							<!-- content -->
							<div class="index-service-content">
								<h3><?php echo $servicerow['servicetitle'] ?></h3>
								<a href="services.php?pgid=<?php echo $servicerow['servicepageid'] ?>">Read More <i class="fa fa-angle-double-right"></i></a>
							</div>
							<!-- content -->
						</div>
					</div>
					<?php
						}
					?>
					<!-- item -->
				</div>
				<!-- owl caro -->
			</div>
			<!-- col -->
		</div>
	</div>
</section>
<!-- section 4/services caro -->
<!-- fun fact -->
<section class="funfact pd-t-80 text-center">
	<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="fun-count">
			<h1><span class="counter" data-counterup-time="3000" data-counterup-delay="1">200</span>+</h1>
			<h5>Completed Projects</h5>
			</div>
		</div>		
		<div class="col-md-4">
			<div class="fun-count">
			<h1><span class="counter" data-counterup-time="3000" data-counterup-delay="1">200</span>+</h1>
			<h5>Completed Projects</h5>
			</div>
		</div>		
		<div class="col-md-4">
			<div class="fun-count">
			<h1><span class="counter" data-counterup-time="3000" data-counterup-delay="1">200</span>+</h1>
			<h5>Completed Projects</h5>
			</div>
		</div>							
	</div>
	</div>
</section>
<!-- fun fact -->
<!-- section 5/blog -->
<section class="pd80">
	<div class="container">
		<div class="row">
			<!-- col -->
			<div class="col-lg-12">
				<h3>Our Weekly Blog</h3>
			</div>
			<!-- col -->
			<!-- col -->
			<div class="col-lg-12">
				<!-- blog caro -->
				<div class="owl-carousel blog-caro">
				<?php
                    $blogshow="SELECT * FROM blogdetail ORDER BY blogid";
                    $blogresult = $DBcon->query($blogshow);
                	while($blogrow = $blogresult->fetch_assoc()) { ?>
					<!-- item -->
					<div class="item">
						<!-- blog inner -->
						<div class="index-blog">
							<!-- img -->
							<div class="index-blog-img">
								<a href="blog-detail.php?pgid=<?php echo $blogrow['blogid'];?>"><img src="admin/<?php echo $blogrow['blogimg'] ?>" class="img-fluid" alt=""></a>
							</div>
							<!-- img -->
							<!-- content -->
							<div class="index-blog-cont">
								<h3><?php echo $blogrow['blogtitle'] ?></h3>
								<p><?php echo $blogrow['blogshortdescri'] ?></p>
								<div class="blog-footer">
                                    <div class="post-author">
                                        <span>Post by <a href="blog-detail.php?pgid=<?php echo $blogrow['blogid'];?>">Admin</a></span>
                                    </div>
                                    <a href="blog-detail.php?pgid=<?php echo $blogrow['blogid'];?>" class="blog-link">Read More</a>
								</div>
							</div>
							<!-- content -->
						</div>
						<!-- blog inner -->
					</div>
					<!-- item -->
				<?php
					}
				?>
				</div>
				<!-- blog caro -->
			</div>
			<!-- col -->
		</div>
	</div>
</section>
<!-- section 5/blog -->
<!-- section 6/gallery -->
<section class="index-sec6">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 pd0">
				<!-- gallery caro -->
				<div class="owl-carousel gallery-caro">
					<!-- item -->
					<?php
                	$detailshow1="SELECT * FROM galleryimagedetail ORDER BY galleryimgid";
                	$result1 = $DBcon->query($detailshow1);
                	while($row = $result1->fetch_assoc()) { ?>
					<div class="item">
					 <div class="proj-hm">
						<img src="admin/<?php echo $row['galleryimage'] ?>" class="img-fluid" alt="">
						<!-- over -->
							<div class="proj-hm-over">
								<div class="proj-hm-over-txt">
									<a class="spotlight" href="admin/<?php echo $row['galleryimage'] ?>">
										<i class="fa fa-search"></i>
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
					<!-- item -->
				</div>
				<!-- gallery caro -->
			</div>
		</div>
	</div>
</section>
<!-- section 6/gallery -->
<!-- section 7/testimonial -->
<section class="pd80 index-sec7 bg-color1">
	<div class="container">
		<div class="row">
			<!-- col -->
			<div class="col-lg-12">
				<h3>Our Testinomials</h3>
			</div>
			<!-- col -->
			<!-- col -->
			<div class="col-lg-12">
				<!-- testimonial -->
				<div class="owl-carousel testi-caro">
					<!-- item -->
					<div class="item">
						<div class="index-testi">
							<i class="fa fa-quote-left"></i>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<h4>User Name</h4>
							<img src="images/home/cli.png" class="img-cli" alt="">
						</div>
					</div>
					<!-- item -->
				</div>
				<!-- testimonial -->
			</div>
			<!-- col -->
		</div>
	</div>
</section>
<!-- section 7/testimonial -->
<!-- section 8/strip -->
<section class="index-sec8">
	<div class="container">
		<div class="row">
			<!-- col -->
			<div class="col-lg-9">
				<h3>Need Support, Connect With Us..</h3>
			</div>
			<!-- col -->
			<!-- col -->
			<div class="col-lg-3 text-right">
				<a href="contact-us.php" class="btn-style2">Connect Now</a>
			</div>
			<!-- col -->
		</div>
	</div>
</section>
<!-- section 8/strip -->
<!-- footer  -->
<?php include'footer.php';?>
<!-- footer  -->
<?php include'footer-link.php';?>
<!-- footer  -->
</body>
</html>