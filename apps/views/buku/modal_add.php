<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cloud-upload fa-fw"></i> Import Data Buku</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/simpandatabuku" enctype="multipart/form-data">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
    <div class="form-group">
        <label> Kode Buku :</label>
        <input type="text" name="kodebuku" class="form-control" placeholder="Masukkan Kode Buku" required>
    </div> 

     <div class="form-group">
        <label> Nama Buku :</label>
        <input type="text" name="namabuku" class="form-control" placeholder="Masukkan Nama Buku" required>
    </div>

    <div class="form-group">
        <label> Pengarang :</label>
        <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang" required></input>
    </div>

    <div class="form-group">
        <label> Penerbit :</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Nama Penerbit" required></input>
    </div> 

    <div class="form-group">
        <label> Status Buku :</label>
        <select class="form-control" name="statussedia" required>
          <option value="" selected="" disabled="">Pilih</option>
          <option value="Tersedia">Tersedia</option>
          <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
    </div> 

     <div class="form-group">
        <label> Jumlah Buku :</label>
        <input type="text" name="jumlahbuku" class="form-control" placeholder="Masukkan Jumlah Buku" required>
    </div> 
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-cloud-upload fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>
</form>