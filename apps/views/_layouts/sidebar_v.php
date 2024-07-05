  <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="header"><strong>MAIN MENU</strong></li>
      
      <li class="treeview beranda" id="beranda">
        <a href="<?php echo base_url() ?>dashboard">
          <i class="ion ion-ios-home"></i> <span>Beranda</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <li class="treeview" id="master">
        <a href="#">
          <i class="ion ion-ios-folder"></i>
          <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="pelanggan"><a href="<?php echo base_url('Master/databuku') ?>"><i class="ion ion-ios-checkmark"></i>Data Buku</a></li>
          <li id="pelanggan"><a href="<?php echo base_url('Master/dataanggota') ?>"><i class="ion ion-ios-checkmark"></i>Data Anggota</a></li>
        </ul>
      </li>
      <li class="treeview" id="transaksi">
        <a href="#">
          <i class="fa fa-cog"></i>
          <span>Peminjaman</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="dataprestasi"><a href="<?php echo base_url('Master/datapinjam') ?>"><i class="ion ion-ios-checkmark"></i> Peminjaman Buku</a></li>
        </ul>
        <ul class="treeview-menu">
          <li id="dataprestasi"><a href="<?php echo base_url('Master/databalik') ?>"><i class="ion ion-ios-checkmark"></i> Pengembalian Buku</a></li>
        </ul>
      </li>
	  <li class="treeview" id="cetak">
        <a href="#">
          <i class="ion ion-ios-folder"></i>
          <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="mapres"><a href="<?php echo base_url('Master/datapeminjaman') ?>"><i class="ion ion-ios-checkmark"></i> Peminjaman</a></li>
        </ul>
      </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>