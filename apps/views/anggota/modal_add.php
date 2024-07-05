<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cloud-upload fa-fw"></i> Input Data Anggota</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/simpandataanggota" enctype="multipart/form-data">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
    <div class="form-group">
        <label> ID Anggota :</label>
        <input type="text" name="id_anggota" class="form-control" placeholder="Masukkan ID Anggota" required>
    </div> 

     <div class="form-group">
        <label> Nama Anggota :</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
    </div> 

     <div class="form-group">
        <label> Jabatan :</label>
        <select class="form-control" name="Jabatan" required>
          <option value="" selected="" disabled="">Pilih</option>
          <option value="KABAG">KABAG</option>
          <option value="KASUBAG">KASUBAG</option>
          <option value="KAUR">KAUR</option>
          <option value="STAFF">STAFF</option>
          <option value="UMUM">UMUM</option>
        </select>
    </div> 

    <div class="form-group">
        <label> Alamat :</label>
        <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat" required></textarea>
    </div> 

     <div class="form-group">
        <label> Nomor HP :</label>
        <input type="text" name="nomorhp" class="form-control" placeholder="Masukkan No HP" required>
    </div> 
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-cloud-upload fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>
</form>