<div class="row">
 <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">

        <?php 
          foreach($produk->result() as $r){
            $dat_agt = $r->dat_agt;
            $dat_tbk = $r->dat_tbk;
            $dat_pjm = $r->dat_pjm;
            }?>
	
        <h3><?php echo $r->dat_agt ?></h3>

        <p>Jumlah Anggota</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="<?php echo base_url('Master/dataanggota') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
  
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
	
        <h3><?php echo $r->dat_tbk ?></h3>

        <p>Jumlah Buku</p>
      </div>
      <div class="icon">
        <i class="ion ion-filing"></i>
      </div>
      <a href="<?php echo base_url('Master/databuku') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
     <div class="inner">
	
        <h3><?php echo $r->dat_pjm ?></h3>

        <p>Jumlah Peminjaman</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
     <div class="inner">
	
        <h3>1</h3>

        <p>Jumlah Laporan</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="<?php echo base_url('Master/datapeminjaman') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  
</div>

<script type="text/javascript">
  $('#beranda').addClass('active');
</script>