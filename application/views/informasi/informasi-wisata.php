<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ampera Answering | tempat wisata</title>
<?php 
	$this->load->view("common/css");

?>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>style/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>style/custom/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
			
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="http://localhost/ampera2/" style="color:#b71c1c;">Ampera Answer</a>
            </div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" style=" border:0px solid #000000; margin-top:10px;" >
						
							<form name="form2" action="http://localhost/ampera2/welcome/token" method="get">
							<div class="input-group" style="margin-left:30px">
							<input type="text" class=" autocomplete form-control col-xs-12" id="search" name="search"  placeholder="Apa yang ingin anda tanyakan ? "/>
							 <span class="input-group-btn" id="basic-addon2"><button class="btn btn-primary" type="submit" id="btn-jawab" type="button" ><i class="fa fa-search" style="font-size:20px;"></i></button>
							 </span>
							 </div>
							 </form>
					
					</div>
						<div id="user" class="col-sm-2 col-md-2 col-lg-2 col-xs-12"  style="margin-top:-10px; border:0px solid #000000;" >
			<div class="col-sm-6  col-md-6 col-xs-12 col-lg-6" style="border:0px solid #000000;">
			 <ul class="nav navbar-nav navbar-right">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="http://localhost/ampera/gambar/icon.png" height="30px" width="30px" alt="foto" > </a>
						<ul id="login-dp" class="dropdown-menu">
						<li>
					 <div class="row">
							<div class="col-md-12" style="color:black;">
							<center><h3>MENU</h3></center>
						
							<div class="col-md-12 col-xs-3" style="border:1px solid #E87E04;"></div>
							
								<!--<div class="social-buttons" >
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>-->
                        
								
							</div>
							<div class="bottom text-center">
							<div class="col-md-12 col-xs-12" style="color:black;"> <center><h5>Belum Punya Akun</h5></center</div>
								<a href="#"><button type=" button" class=" col-sm-12 col-xs-12 btn btn-warning">Mendaftar</button></a>

							</div>
					 </div>
				</li>
						
						</ul>
			 </ul>
					
				</div>
				<div class="col-sm-6  col-md-6 col-xs-12 col-lg-6">
				<img  src="https://2.bp.blogspot.com/-0__gZc_97PI/VkhEFpi1R6I/AAAAAAAAC0w/wNaMf2DfKH0/s1600/Foto+Profil+Light.jpg" height="30px" width="30px" alt="foto" class="img-circle">
				</div>
				
			</div>
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="margin-top:50px;">
					
                <ul class="nav navbar-nav" style="margin-left:180px;">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#intro">Gambar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#penjelasan">Penjelasan</a>
                    </li>
					 <li>
                        <a class="page-scroll" href="#lokasi">Lokasi</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
	<?php foreach($wisata as $b) { ?>
    <section id="intro" class="intro-section" style="margin-top:10px;">
			<div class="col-sm-12 col-md-12 col-xs-12" >
				<img class="col-sm-12 col-md-12 col-xs-12 col-lg-12" src="http://localhost/ampera/file/<?php echo $b->gambar ?>" class="img img-responsive" />
			
			</div>
    </section>
	<?php } ?>

    <!-- About Section -->
    <section id="penjelasan" class="about-section">
        <div class="container">
            <div class="row">
				<?php foreach($wisata as $b) {?>
				 <div class="col-lg-6">
				 <h1><?php echo $b->nama ?></h1>
				</div>
			</div>
			<?php echo $b->keterangan ?>
			 <br/>
	    </div>
				<?php } ?>
               
    </section>

    <!-- Services Section -->
    <section id="lokasi" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Lokasi</h1>
                </div>
				<?php foreach($wisata as $b) {?>
					<div class="col-sm-12 col-md-12 col-xs-12">
						<?php  echo $b->lokasi?>
					
					</div>
				<?php } ?>
            </div>
				
    </section>

    
	

    <!-- jQuery -->
    <script src="<?php echo base_url()?>style/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>style/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo base_url()?>style/custom/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>style/custom/js/scrolling-nav.js"></script>

</body>

</html>
