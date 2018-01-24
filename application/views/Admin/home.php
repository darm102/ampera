<!DOCTYPE html>
<html>
  <head>
    <title>Ampera Answer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo site_url('asset/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo site_url('asset/css/styles.css')?>" rel="stylesheet">

	<link href="<?php echo site_url('asset/formvalidation/dist/css/formValidation.min.css');?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/jquery/jquery.autocomplete.css') ?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/jquery/jquery-ui.min.css') ?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/font/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?php echo site_url()?>asset/DataTables/media/css/jquery.dataTables.css" rel="stylesheet">
	<link href="<?php echo site_url()?>asset/DataTables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	<script src="<?php echo site_url('asset/jquery/jquery.min.js')?>"></script>
	<script src="<?php echo site_url('asset/formvalidation/dist/js/formValidation.min.js');?>"></script>
	<script src="<?php echo site_url()?>asset/DataTables/media/js/jquery.js" type="text/javascript" ></script>
	<script src="<?php echo site_url()?>asset/DataTables/media/js/jquery.dataTables.js" type="text/javascript" ></script>
	<script src="<?php echo site_url('asset/formvalidation/dist/js/formValidation.min.js');?>"></script>
	<script src="<?php echo site_url('asset/formvalidation/dist/js/framework/bootstrap.min.js');?>"></script>
	<script src="<?php echo site_url('asset/jquery/jquery.autocomplete.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('asset/jquery/jquery-ui.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('asset/ckeditor/ckeditor.js');?>"></script>
	<script src="<?php echo site_url('asset/ckeditor/styles.js');?>"></script>
	<script src="<?php echo site_url('asset/ckeditor/adapters/jquery.js');?>"></script>
	
    <!-- styles -->
   
	
	
	
	
	
	
	
	<script src="<?php echo site_url('asset/jquery/jquery.autocomplete.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('asset/jquery/jquery-ui.min.js') ?>" type="text/javascript"></script>
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo site_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo site_url('asset/js/custom.js')?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Admin</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="<?php if($this->session->userdata('content')=="budaya"){echo "current";}?>"><a href="<?php echo site_url('admin/budaya');?>"><i class="glyphicon glyphicon-home"></i> Data Budaya</a></li>
					 <li class="submenu">
                        
                         <!-- Sub menu -->
                         
                        
                           
                        <li <?php if($this->session->userdata('content')=="add_profile"){echo 'class="current"';}?>><a href="<?php echo site_url('admin/add_profile');	?>"><i class="glyphicon glyphicon-calendar"></i> Profil Admin</a></li>
						 <li><a href="<?php echo site_url('admin/home/logout');?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </li>
                </ul>
             </div>
		  </div>
		  <?php if($this->session->userdata('content')=="budaya"){
					$this->load->view('admin/budaya');
				}
				else if($this->session->userdata('content')=='add_profile'){
					$this->load->view('admin/add_profile.php');
				}
			
			?>

		  
		  
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 UKMC
            </div>
            
         </div>
      </footer>

    
  </body>
</html>