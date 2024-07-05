<div id="respon1"><?php echo $this->session->flashdata('msg');?></div>
<div class="box box-info box-solid">
  <div class="box-header">
    <i class="fa fa-user fa-fw"></i>
    <h3 class="box-title">List Data Peminjaman</h3>
  </div>
  <div class="box-body">
    <!-- <div style="text-align:right; margin-top:10px; margin-bottom: 10px;">
        <button class="btn btn-warning btn-import" ><i class="fa fa-cloud-upload fa-fw"></i> Peminjaman Baru</button>
    </div> -->
		<table class="table table-hover" id="table">
			<thead class="table-header">
				<tr>
					<th width="5%">No.</th>
					<th width="15%">ID Peminjaman</th>
					<th>Nama Peminjam</th>
					<th>Status Peminjaman</th>
					<th>Kode Buku</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no =0;
				foreach($peminjaman->result() as $r){
					$no++;
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $r->idpinjaman ?></td>
					<td><?php echo $r->namapeminjam ?></td>
					<td><?php echo $r->lamapinjaman ?></td>
					<td><?php echo $r->kdbkpjm ?></td>
					
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
        <form method="post" action="<?php echo base_url() ?>Master/hapuspeminjaman">
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
	$('#peminjaman').addClass('active');

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
	    url: "<?php echo base_url('Master/inputpeminjaman'); ?>",
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
	    url: "<?php echo base_url('Master/databalik'); ?>",
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