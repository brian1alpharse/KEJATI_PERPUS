<div class="modal-header">
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cloud-upload fa-fw"></i> Pengembalian</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/simpandatapeminjaman" enctype="multipart/form-data">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
    <div class="form-group">
        <label> ID Peminjaman :</label>
        <input type="text" name="idpinjaman" id="ip" class="form-control" placeholder="ID Peminjaman" required>
    </div> 

    <div class="form-group">
        <label> ID Peminjam :</label>
        <input type="text" name="idpeminjam" id="ip" class="form-control" placeholder="ID Peminjam" required>
    </div> 

    <div class="form-group">
        <label> Nama Peminjam :</label>
        <input type="text" name="namapeminjam" id="np" class="form-control" placeholder="Masukkan Nama Kendaraan" required>
    </div> 

    <!-- <div class="form-group">
        <label> Lama Peminjaman :</label>
        <input type="text" name="lamapinjaman" id="lp" class="form-control" placeholder="Masukkan Berapa Lama(Hari) Peminjaman" required onkeypress="return event.charCode >= 48 && event.charCode<= 57">
    </div>  -->

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
        <input type="text" name="kdbkpjm" id="kb" class="form-control" placeholder="Masukkan Kode Buku" required>
    </div> 
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-cloud-upload fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " onclick="javascript:eraseText();"><i class="fa fa-close fa-fw"></i>Clear</button>
  </div>
</form>
</form>
<script type="text/javascript">
    function eraseText() {
     document.getElementById("ip").value = "";
     document.getElementById("np").value = "";
     document.getElementById("lp").value = "";
     document.getElementById("kb").value = "";
  }
</script>