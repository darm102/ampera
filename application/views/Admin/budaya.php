<div class="col-md-10">
		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
								<div class="page-header">
									<h3 align="center">Input Data Budaya</h3>
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
											<input type="text" class="form-control" name="nim" id="nim"/>
											<div id="suggesstion-box"></div>
										</div>
									</div>
									<div class="form-group">
									<label class="col-lg-2 control-label">Lokasi</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="judul" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Gambar</label>
										<div class="col-lg-8">
											<input type="file" class="form-control" name="pdfFile" />
											<span class="help-block">Pilih file gambar dengan ukuran kurang dari 5MB.</span>
										</div>
									</div>
									<div class="form-group">
									<label class="col-lg-2 control-label">Kategori</label>
										<div class="col-lg-8">
											<select class="form-control" id="topik" name="topik">
											<option value="">pilih kategori</option>
											<option value="wisata">Wisata</option>
											<option value="kuliner">Kuliner</option>
											<option value="Padat">Pakaian Adat</option>
											</select>
										</div>
									</div>
									<div class="form-group">
									<label class="col-lg-2 control-label">Keterangan</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="keterangan" />
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
			judul: {
				validators: {
				notEmpty: {
					message: 'Judul tidak boleh kosong.'
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
            pdfFile: {
                validators: {
					notEmpty: {
					message: 'File PDF tidak boleh kosong.'
					},
                    file: {
                        extension: 'pdf',
                        maxSize: 5*1024*1024,
                        message: 'File tidak sesuai ketentuan, tolong cek kembali.'
                    }
                }
            },
			Jurusan: {
                validators: {
					notEmpty: {
					message: 'Jurusan tidak boleh kosong'
					},
                  
                }
            },
			topik: {
                validators: {
					notEmpty: {
					message: 'topik tidak boleh kosong'
					},
                  
                }
            }
			keterangan: {
                validators: {
					notEmpty: {
					message: 'keterangan tidak boleh kosong'
					},
                  
                }
            }
		}
	})
});
</script>
<script>
 $(function () {
        $("#nim").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
            minLength:0,
            delay:0,
            source:"<?php echo site_url("readpdf/getid");?>",
            });
	});

</script>

