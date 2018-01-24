<div class="col-md-10">
		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
								<div class="page-header">
									<h3 align="center">Add Data Admin</h3>
								</div>
								
								<?php if(!empty($this->session->flashdata('message'))){
									echo '<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									'.$this->session->flashdata('message').'
								</div>';
								}
								?>
		  						<form enctype="multipart/form-data" id="defaultForm" method="post" class="form-horizontal">
									<div class="form-group">
									<label class="col-lg-2 control-label">Nama</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="nama" />
										</div>
									</div>
									
									<div class="form-group">
									<label class="col-lg-2 control-label">Username</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="username" />
										</div>
									</div>
									
									<div class="form-group">
									<label class="col-lg-2 control-label">Password</label>
										<div class="col-lg-8">
											<input type="password" class="form-control" name="password" />
										</div>
									</div>
									
									<div class="form-group">
									<label class="col-lg-2 control-label">Konfirmasi Password</label>
										<div class="col-lg-8">
											<input type="password" class="form-control" name="c_password" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-lg-2 control-label"></label>
											<div class="col-lg-8">
											<button type="submit" class="btn btn-primary" value="Validate">Kirim</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
		  </div>
<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').formValidation({
		framework: 'bootstrap',
        excluded: [':disabled'],
        fields: {
			
			nama: {
				validators: {
				notEmpty: {
					message: 'Nama tidak boleh kosong.'
					}
				}
			},
			username: {
				validators: {
				notEmpty: {
					message: 'Username tidak boleh kosong.'
					}
				}
			},
			nim: {
				validators: {
				notEmpty: {
					message: 'NIM tidak boleh kosong.'
					}
				}
			},
			c_password: {
				validators: {
					notEmpty: {
						message: 'Konfirmasi password tidak boleh dibiarkan kosong.'
					},
				
					identical: {
						field: 'password',
						message: 'Password tersebut tidak cocok. Coba lagi?'
					}
				}
			},
			password: {
                validators: {
					notEmpty: {
					message: 'Password tidak boleh kosong'
					},
                  
                }
            }
		}
	})
});
</script>
