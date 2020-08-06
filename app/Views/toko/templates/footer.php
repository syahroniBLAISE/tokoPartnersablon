<footer id="footer"><!--Footer-->
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<?php 
						$phone = $kontak['phone'];
						$email = $kontak['email'];
					?>
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> <?php echo $phone ?></a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> <?php echo $email ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right navbar-expand-lg">
						<?php 
							$tw = $sosial_media['tw'];
							$fb = $sosial_media['fb'];
							$gp = $sosial_media['gp'];
						?>
						<ul class="nav navbar-nav">
							<li><a href="<?php echo $fb;?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $tw;?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo $gp;?>"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header_top-->
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<p class="" align="center" >Copyright © 2019 Syahroni Partner Sablon. All rights reserved.</p>
			
		</div>
	</div>
	</div>
</footer><!--/Footer-->
	

  
    <script src="/asset/js/jquery.js"></script>
	<script src="/asset/js/bootstrap.min.js"></script>
	<script src="/asset/js/jquery.scrollUp.min.js"></script>
	<script src="/asset/js/price-range.js"></script>
    <script src="/asset/js/jquery.prettyPhoto.js"></script>
	<script src="/asset/js/main.js"></script>
</body>
</html>