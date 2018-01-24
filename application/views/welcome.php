<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ampera Answer</title>
		<meta charset= "utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php
			$this->load->view('common/css');
		?>
		
    </head>
<body>
	<div class="container-fluid" >
		<div class="col-sm-12 col-lg-12 col-xs-12">
			<div id="user">
			<div class="col-sm-6  col-md-6 col-xs-12 col-lg-6">
					<a href="#"> <img src="http://localhost/ampera2/gambar/icon.png" height="30px" width="30px" alt="foto" > </a>
				</div>
				<div class="col-sm-6  col-md-6 col-xs-12 col-lg-6">
				<img  src="https://2.bp.blogspot.com/-0__gZc_97PI/VkhEFpi1R6I/AAAAAAAAC0w/wNaMf2DfKH0/s1600/Foto+Profil+Light.jpg" height="30px" width="30px" alt="foto" class="img-circle">
				</div>
				
			</div>
			
		</div>
		
		<div  class="col-sm-12 col-lg-12 col-xs-12" >
			<div class="col-sm-8 col-md-8 col-xs-12 col-sm-offset-4" id="gambar-logo">
				<img id="ampera-logo" src="http://localhost/ampera2/gambar/logo-ampera.png" height="400" width= "400" />
			</div>
			<center><h1 id="logo"><b>Ampera Answer</b></h1> </center>
			
		</div>
		<div class="col-sm-6 col-md-6 col-xs-12 col-sm-offset-3" id="cari" style="border:0px solid #000000; margin-top:10px;">
					<form name="form1" class="form-horizontal" action="http://localhost/ampera2/welcome/token" method="get" style="margin-top:10px;">
						<div class="input-form group-cari">
							<input type="text" class="autocomplete col-sm-12 form-control cari" id="search" name="search" style="height:40px; border-radius:0px;" placeholder="Apa yang ingin anda tanyakan?"/>
							<div id="result"></div>
							 <!--<span class=" btn btn-primry input-group-addon" id="basic-addon2"><a href="#"><i class="fa fa-search"></i></a></span>-->
							</div>
							<!--<center><button id="btn-answer"  class="col-sm-4 col-sm-offset-2 btn btn-default"  style="margin-top:30px;">ALGORITMA</button></center>-->
							<center><button id="btn-answer" type="submit" class="col-sm-4 btn btn-default col-sm-offset-4" style="margin-top:30px;"> <i class="fa fa-search"></i> &nbsp; JAWAB</button></center>
					</form>
				</div>
		
	</div>
	 <div class="footer" style="background:#f5f5f5;">
			<div class="container" style="background:#f5f5f5; padding-top:25px;">
					<?php echo anchor("cari/tentang-kami","Tentang Kami",array("style"=>"color:#757575;")) ?>
					<?php echo anchor("cari/bantuan","Bantuan",array("style"=>"color:#757575; margin-left:20px; ")) ?>
					<div class="pull-right" style="color:#9e9e9e; text-align:right;">
						Ampera Answer @2017
					</div>
			</div>

</div>
</body>
<?php
	$this->load->view('common/js');
?>
</html>