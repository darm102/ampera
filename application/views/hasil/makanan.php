<html>
	<head>
		<title>Ampera Answer</title>
		<meta charset= "utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php
			$this->load->view('common/css');
		?>
		<style>
			body{
				
			}
			#btn-login{
				background:#F22613;
				color:#ffffff;
				border:2px solid #ffffff;
				border-radius:10px 10px 10px 10px;
				font-family: 'Poppins', sans-serif;
				
				
			}
			#btn-login:hover{
				background:#ffffff;
				color:#000000;
			}
			#nama{
				border:2px solid #000000;
				border-radius:10px 10px 10px 10px;
			}
			#btn-daftar{
				background:#ffffff;
				color:#000000;
				border-radius:10px 10px 10px 10px;
				font-size:20px;
				border:2px solid #000000;
				font-family: 'Poppins', sans-serif;
			}
			#btn-daftar:hover{
					background:#F22613;
					color:#ffffff;
					border:2px solid #ffffff;
			}
			#icon-user2{
				 display: inline-block;
				font-size: 30px;
				width: 40px;
				height: 40px;
				line-height: 40px;
				text-align: center;
				position: relative;
				z-index: 1;
				color: #ffffff;
				overflow: hidden;
				border: 2px solid #4183D7;
				border-radius: 50%;
				margin-left:80px;
				background:#4183D7;
				
			}
			.footer{
			position: fixed;
			bottom: 0;
			width: 100%;
			height: 50px auto;  
}
			
	
		</style>
		<?php
		$this->load->view('common/js');
	?>
	<script>
		$(document).ready(function() {
		$(".cari").click(function(e){
			var x = $(this).attr("id");
			$.ajax({
		url: "http://localhost/qa/cari/prodi/",
		type: "GET",
		data: 'id='+ x,
		beforeSend: function() {
				$("#loading").show(1000).html("<img src='http://localhost/sekolah/gambar/ajax-loader.gif' height='50'>");
		},
		success: function(data)
		{
			$('#lengkap').html(data);
		},
		error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
		
	});
		});
	});
	</script>
	</head>
		<body>
			<div class="container-fluid" >
				<?php $this->load->view("tampilan/header"); ?>
			
			
				<div class="col-sm-12 col-xs-12 " >
				<div class="container" style="margin-top:100px;">
				<h3 style="font-family:'Raleway', sans-serif;"><i class="fa fa-map-marker"></i>&nbsp; Palembang > Makanan</h3>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="border-bottom:1px solid #e0e0e0 "></div>
				<div class="container">
							
						<div class="col-sm-12 col-md-12 col-xs-12" style="border:0px solid #000000; margin-top:10px;">
						
							<div class="row">
							<?php foreach($jawab as $b){ ?>
								<div class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
									<div class="thumbnail">
									<img src="http://localhost/ampera/file/<?php echo $b->gambar ?>" class="img-responsive">
									<div class="caption">
										<!--<h4 style=" font-family:'Raleway', sans-serif;">Tempat wisata </h4>-->
										<h2 style=" font-family:'Raleway', sans-serif;"><?php echo $b->nama; ?> </h2>
										<?php echo anchor("cari/informasi-wisata/".$b->id,"Lihat Selengkapnya &nbsp; <i class='fa fa-chevron-right'></i>",array("class"=>"btn btn-default  ")) ?>	
									</div>
									
									</div>
								</div>
								<?php }?>
								</div>
						
						
					
				
				
				</div>
				<div class="col-sm-6" id="lengkap">
				
				</div>
				
				
				</div>
			
			
			</div>	
			
			</div>
			
			<!-- <div class="footer" style="background:#f5f5f5;">
			<div class="container" style="background:#f5f5f5; padding-top:20px;">
					<?php //echo anchor("cari/tentang-kami","Tentang Kami",array("style"=>"color:#757575;")) ?>
					<?php //echo anchor("cari/bantuan","Bantuan",array("style"=>"color:#757575; margin-left:20px; ")) ?>
					<div class="pull-right" style="color:#9e9e9e; text-align:right;">
						Ampera Answer @2017
					</div>
			</div>

</div>-->
			
		</body>
	
</html>