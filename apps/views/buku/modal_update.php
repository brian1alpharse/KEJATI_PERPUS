<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-tag fa-fw"></i> Ubah Data Buku</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/updatedatabuku">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
  <?php
    foreach($databuku->result() as $r){
      $kodebuku = $r->kodebuku;
      $namabuku = $r->namabuku;
      $pengarang = $r->pengarang;
      $penerbit = $r->penerbit;
      $statussedia = $r->statussedia;
      $jumlahbuku = $r->jumlahbuku;
    }
  ?>     
      <div class="form-group">
          <label> Kode Buku :</label>
          <input type="text" name="kodebuku" class="form-control" placeholder="Masukkan Kode Buku" required value="<?php echo $kodebuku ?>" readonly>
      </div> 

      <div class="form-group">
          <label> Nama Buku :</label>
          <input type="text" name="namabuku" class="form-control" placeholder="Masukkan Nama Buku" required autocomplete="off" value="<?php echo $namabuku ?>" onkeypress="return event.charCode >= 65 && event.charCode <= 127  || event.charCode == 32">
      </div> 

      <div class="form-group">
          <label> Pengarang :</label>
          <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang" required autocomplete="off" value="<?php echo $pengarang ?>">
      </div> 
      
      <div class="form-group">
          <label> Penerbit :</label>
          <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Nama Penerbit" required autocomplete="off" value="<?php echo $penerbit ?>">
      </div> 
    
      <div class="form-group">
          <label> Status Buku :</label>
          <input type="text" name="statussedia" class="form-control" placeholder="Masukkan Status Buku" required autocomplete="off" value="<?php echo $statussedia ?>">
      </div> 

      <div class="form-group">
          <label> Jumlah Buku :</label>
          <input type="text" name="jumlahbuku" class="form-control" placeholder="Masukkan Jumlah Buku" required autocomplete="off" value="<?php echo $jumlahbuku ?>">
      </div>

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>