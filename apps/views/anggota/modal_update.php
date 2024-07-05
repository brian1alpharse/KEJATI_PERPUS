<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-tag fa-fw"></i> Ubah Data Anggota</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/updateanggota">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
  <?php
    foreach($anggota->result() as $r){
      $id_anggota = $r->id_anggota;
      $nama = $r->nama;
      $jabatan = $r->jabatan;
      $alamat = $r->alamat;
      $nomorhp = $r->nomorhp;
    }
  ?>     
      <div class="form-group">
          <label> ID Anggota :</label>
          <input type="text" name="id_anggota" class="form-control" placeholder="ID Anggota" required value="<?php echo $id_anggota ?>" readonly>
      </div> 

      <div class="form-group">
          <label> Nama Anggota :</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama Anggota" required autocomplete="off" value="<?php echo $nama ?>" onkeypress="return event.charCode >= 65 && event.charCode <= 127  || event.charCode == 32">
      </div> 
	  
      <!-- <div class="form-group">
          <label> Jurusan :</label>
          <input type="text" name="jabatan" class="form-control" placeholder="Jurusan" value="<?php echo $jabatan ?>" required autocomplete="off">
      </div> -->
      <div class="form-group">
        <label> Jabatan :</label>
        <select type="text" class="form-control" name="jabatan" required>
          <option value="" selected="" disabled="">Pilih</option>
          <option value=" KABAG">KABAG</option>
          <option value=" KASUBAG">KASUBAG</option>
          <option value=" KAUR">KAUR</option>
          <option value=" STAFF">STAFF</option>
          <option value=" UMUM">UMUM</option>
        </select>
    </div> 
	  
      <div class="form-group">
          <label> Alamat :</label>
          <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $alamat ?></textarea>
      </div> 

      <div class="form-group">
          <label> No. HP :</label>
          <input type="text" name="nomorhp" class="form-control" placeholder="No. HP" value="<?php echo $nomorhp ?>" required autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode<= 57">
      </div> 
	  
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>