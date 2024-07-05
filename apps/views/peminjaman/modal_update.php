<div class="modal-header">
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-tag fa-fw"></i> Pengembalian Buku</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/updatedatapinjaman">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
     
      <div class="form-group">
          <label> ID Peminjaman :</label>
          <input type="text" name="idpinjaman" class="form-control" placeholder="Kode Kendaraan" required value="<?php echo $idpinjaman ?>">
      </div> 

      <div class="form-group">
          <label> Nama Peminjam :</label>
          <input type="text" name="namapinjam" class="form-control" placeholder="Nama Peminjam" required autocomplete="off" value="<?php echo $namapeminjam ?>" onkeypress="return event.charCode >= 65 && event.charCode <= 127  || event.charCode == 32">
      </div>

      <div class="form-group">
        <label> Status :</label>
        <select type="text" class="form-control" name="lamapinjaman" required>
          <option value="" selected="" disabled="">Pilih</option>
          <option value=" Dipinjam">Perpanjang</option>
          <option value=" Dikembalikan">Dikembalikan</option>
        </select>
      </div> 
	  
	    <div class="form-group">
          <label> Kode Buku :</label>
          <input type="text" name="kdbkpjm" class="form-control" placeholder="Jenis" value="<?php echo $kdbkpjm ?>" required autocomplete="off">
      </div> 

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>