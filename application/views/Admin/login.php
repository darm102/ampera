<!DOCTYPE html>

<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="<?php echo base_url()?>style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Website Font style -->
	    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">-->
		<link rel="stylesheet" href="<?php echo base_url()?>style/custom/form1.css">
		<!-- Google Fonts -->
		<!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">
-->
		<title>MegaMenu Design</title>
	</head>
	<body>
		<div class="container">
	    
		<div class="col-sm-8 col-sm-offset-2 main">
		<div class="col-sm-6 left-side">
		<img src="<?php echo base_url()?>gambar/ampera.png" width="100%" />
		
		</div><!--col-sm-6-->
		
		<div class="col-sm-6 right-side">
		<h1>Login</h1>
	
		
<!--Form with header-->
<div class="form">
 <form action="" id="form-login" method="post">

	<?php echo '<center>'.$this->session->userdata('login-notif').'</center><br/>' ?>
        <div class="form-group">
		    <label for="form2">Username</label>
            <input type="text" name="username" id="username" class="form-control">
            
        </div>

        <div class="form-group">
		    <label for="form4">Your password</label>
            <input type="password" name="password"id="password" class="form-control">
           
        </div>

        <div class="text-xs-center">
		 <button type="submit" class="btn btn-default submit">Log in</button>
           
        </div>


</div>
<!--/Form with header-->

		</div><!--col-sm-6-->
		
		
        </div><!--col-sm-8-->
        
        </div><!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="<?php echo base_url()?>style/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>style/js/bootstrap.min.js"></script>
	</body>
</html>