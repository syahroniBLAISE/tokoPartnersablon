<div class="header-bottom"><!--header-bottom-->
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="mainmenu pull-left">
					<ul class="nav navbar-nav navbar-collapse">
						<li><a href="/toko" class="active">Home</a></li>
						<li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
							<?php foreach ($kategori as $value){ ?>
								<li>
									<a href="/homeToko/kategori/<?php echo $value['id_kategori'];?>"><?php echo $value['nama_kategori'];?></a>
								</li>
							<?php }; ?>	
							</ul>
						</li> 
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<?php 
				echo form_open('HomeToko/cari');
				?>
				<div class="search_box pull-right">
					<input type="text" name="cari" placeholder="Search"/>
				</div>
				<?php 
				echo form_close();
				?>
			</div>
		</div>
	</div>
</div><!--/header-bottom-->
</header><!--/header-->