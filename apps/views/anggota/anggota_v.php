<div id="respon1"><?php echo $this->session->flashdata('msg');?></div>
<div class="box box-info box-solid">
  <div class="box-header">
    <i class="fa fa-user fa-fw"></i>
    <h3 class="box-title">List Data Anggota</h3>
  </div>
  <div class="box-body">
    <div style="text-align:right; margin-top:10px; margin-bottom: 10px;">
        <button class="btn btn-warning btn-import" ><i class="fa fa-cloud-upload fa-fw"></i> Anggota Baru</button>
    </div>
		<table class="table table-hover" id="table">
			<thead class="table-header">
				<tr>
					<th width="5%">No.</th>
					<th width="15%">ID</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Alamat</th>
					<th>No. HP</th>
					<th width="15%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no =0;
				foreach($anggota->result() as $r){
					$no++;
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $r->id_anggota ?></td>
					<td><?php echo $r->nama ?></td>
					<td><?php echo $r->jabatan ?></td>
					<td><?php echo $r->alamat ?></td>
					<td><?php echo $r->nomorhp ?></td>
					<td>
						<a href="javascript:;" class="btn btn-primary btn-xs btn-update" data-id="<?php echo $r->id_anggota ?>"> <i class="fa fa-edit fa-fw" style="color:#ffffff;"></i> <span style="color:#ffffff;">Ubah</span></a>
						<a href="javascript:;" class="btn btn-danger btn-xs hapus-data" data-toggle="modal" data-target="#konfirmasiHapus" data-id="<?php echo $r->id_anggota ?>"><i class="fa fa-trash fa-fw" style="color:#ffffff;"></i>  <span style="color:#ffffff;">Hapus</span></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<div id="tempat-modal"></div>

<div class="modal fade" id="konfirmasiHapus" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
        <h3 style="display:block; text-align:center;">Hapus Data Ini?</h3>
        <form method="post" action="<?php echo base_url() ?>Master/hapusanggota">
          <input type="hidden" name="id" id="id_">
          <div class="col-md-6">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok-sign"></i> Ya, Hapus Data Ini</button>
          </div>
          <div class="col-md-6">
            <button class="form-control btn btn-danger" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Tidak</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	setTimeout(function() {document.getElementById('respon1').innerHTML='';},3000);

	$('#master').addClass('active');
	$('#anggota').addClass('active');

	$(function () {
	    $("#table").dataTable({
	      "iDisplayLength": 10,
	    });
	});

	//modal add
	$(document).on("click", ".btn-import", function() {
	  var id = $(this).attr("data-id");
	  
	  $.ajax({
	    method: "POST",
	    url: "<?php echo base_url('Master/inputanggota'); ?>",
	    data: "id=" +id
	  })
	  .done(function(data) {
	    $('#tempat-modal').html(data);        
	    $('#md_add').modal('show');
	  })
	})

	//modal Edit
	$(document).on("click", ".btn-update", function() {
	  var id = $(this).attr("data-id");
	  
	  $.ajax({
	    method: "POST",
	    url: "<?php echo base_url('Master/ubahanggota'); ?>",
	    data: "id=" +id
	  })
	  .done(function(data) {
	    $('#tempat-modal').html(data);        
	    $('#md_updt').modal('show');
	  })
	})

	//modal hapus
	$(document).on("click", ".hapus-data", function() {
		id = $(this).attr("data-id");
		$('#id_').val(id);
	})
</script>