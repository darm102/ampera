<div class="col-md-10">
	<div class="content-box-large">
		<div class="panel-body">
		  	<div class="row">
				<div class="page-header">
					<h3 align="center">Buat Pengumuman</h3>
				</div>
				<?php if(!empty($this->session->flashdata('message'))){
					echo '<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$this->session->flashdata('message').'
					</div>';}
				?>
				<div class="col-md-10">
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-primary tambah" style="width:100%; margin-bottom:10px;"> <i class="fa fa-plus"></i> Tambah</button>
				</div>
				
				<div class="col-md-12">
					<table id="table" class="cell-border display" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th class="text-center">Id Pengumuman</th>
								<th class="text-center">Judul</th>
								<th class="text-center">Isi</th>
								<th class="text-center">Status</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 	$i=1;
						        
								foreach ($pengumuman as $value){
								$delete='<span kode="'.$value->id_pengumuman.'" class="btn btn-danger hapus" style="width:40px;" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash fa-lg"></i></span>';
						?>
							<tr>				
								<td class="text-center"><?php 	echo $value->id_pengumuman;?></td>
								<td class="text-center"><?php	echo $value->judul; ?></td>
								<td ><?php 	echo $value->content; ?></td>
								<td class="text-center"><?php 	if($value->status==1){
												echo 'Aktif';
											}else if($value->status==2){
												echo 'Ditutup';
											}else if($value->status==3){
												echo 'Tidak Aktif';} ?></td>
								<td align="center"><?php echo '<span kode="'.$value->id_pengumuman.'" class="btn btn-primary edit" style="width:40px;" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-lg"></i></span> '.$delete;
											 ?></td>
							</tr>
							<?php $i++;} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
 </div>
<!-- Modal-->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<form id="defaultForm" method="post" action="" class="form-horizontal">
			<div class="modal-content">
				<!-- Modal Header -->
				<div id="modal-content" class="modal-header">
					<button type="button" class="close" 
					data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="ModalLabel">
						<!-- title from script -->
					</h4>
				</div>
				<!-- Modal Body -->
				<div class="modal-body">
					<fieldset>
						<div class="form-group" id="formAllId">
							<label class="col-lg-2 control-label">Id</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="formId" name="id" readonly/>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-lg-2 control-label">Judul</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="formNama" name="nama" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Content</label>
							<div class="col-lg-10">
								<textarea name="isi" id="formIsi" class="ckeditor"></textarea>
							</div>
						</div>					
						<div class="form-group">
							<label class="col-lg-2 control-label">Aktif</label>
							<div class="col-lg-6">
								<select class="form-control" id="formAktif" name="aktif">
									<option value="1">Aktif</option>
									<option value="2">Tidak aktif</option>
								</select>
							</div>
						</div>
					</fieldset> 
				</div>            
				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-times"></i> Tutup
					</button>
					<button type="submit" class="btn btn-primary" id="submitForm">
						
					</button>
				</div>	
			</div>
		</form>
    </div>
</div>
<!-- Modal Delete-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Konfirmasi</h4>
      </div>
      <div class="modal-body">
            <input type="hidden" name="idhapus" id="idhapus">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!-- /.modal Delete-->
<script>
$(function(){
    $(".tambah").click(function(){
		$('#defaultForm').formValidation('resetForm',true);
		CKEDITOR.instances.formIsi.setData('');
        $('#Modal').modal('show');
		$('#ModalLabel').html("Tambah Skema");
		$('#defaultForm').attr('action', 'pengumuman/tambah');
		$("#formAllId").hide();		
		$('#formNama').val(null);
		$('#formAktif').val(1);
		//$('#isi').val(2);
		$('#submitForm').html("<i class='fa fa-plus'></i> Tambah");		
    });
	
});
</script>
<script>
$(function(){
    $(".edit").click(function(){
		//$('#defaultForm').on('hidden.bs.modal',function(){
		//	
		//});
		$('#defaultForm').formValidation('resetForm',true);
		$("#loadingScreen").removeClass('hidden');
        var kode=$(this).attr("kode");
        $.ajax({
			url : "<?php echo site_url('pengumuman/edit')?>/" + kode,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{			
				$("#loadingScreen").addClass('hidden');
				$('#Modal').modal('show');
				$('#defaultForm').attr('action', 'pengumuman/edit');
				$('#ModalLabel').html("Edit Skema");
				$("#formAllId").show();
				$('#formId').val(data.id_pengumuman);
				$('#formNama').val(data.judul);
				CKEDITOR.instances.formIsi.setData(data.content);	
				$('#formAktif').val(data.status);
				$('#submitForm').html("<i class='fa fa-pencil'></i> Edit");				
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Gagal mengambil data.');
				$("#loadingScreen").addClass('hidden');
			}
		});		
			
    });
});
</script>
<script>
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
			$("#myModal").modal("hide");
			$("#loadingScreen").removeClass('hidden');	
            var kode=$("#idhapus").val();
            $.ajax({
                url:"<?php echo site_url('pengumuman/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('pengumuman');?>";
                },
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Data gagal di hapus');
					$("#loadingScreen").addClass('hidden');
				}
            });
			
        });
    });
</script>
 <script type="text/javascript">
$(document).ready(function() {	
    var oTable = $('#table').DataTable({
		"responsive": true,
		"stateSave": true,
		"aaSorting": [],
		"stateDuration": -1,
		"language": {
				"sProcessing":   "Sedang memproses...",
				"sLengthMenu":   "Tampilkan _MENU_ entri",
				"sZeroRecords":  "Tidak ditemukan data yang sesuai",
				"sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
				"sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
				"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
				"sInfoPostFix":  "",
				"sSearch":       "Cari:",
				"sUrl":          "",
				"oPaginate": {
					"sFirst":    "Pertama",
					"sPrevious": "Sebelumnya",
					"sNext":     "Selanjutnya",
					"sLast":     "Terakhir"
				}
			}
		
    });
})
</script>
<script>
$(document).ready(function() {
    $('#defaultForm').formValidation({
		framework	: 'bootstrap',
		excluded	: 'disabled',
        icon: {
            valid: '<i class="fa fa-check"></i>',
            invalid: '<i class="fa fa-times"></i>',
            validating: '<i class="fa fa-refresh"></i>'
        },
        fields: {
			nama: {
				validators: {
				notEmpty: {
					message: 'Judul tidak boleh kosong.'
					}
				}
			},
			isi: {
				validators: {
				notEmpty: {
					message: 'isi tidak boleh kosong.'
					}
				}
			},
        }
    });
	
});


</script>