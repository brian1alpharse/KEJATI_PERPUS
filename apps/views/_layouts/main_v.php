<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PERPUSTAKAAN</title>
    <link rel="icon" href="<?php echo base_url() ?>asset/logo.png" type="image/png" sizes="32x32">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="author" content="thonie, Web Developer">
    <?php
    $this->load->view('_layouts/css');
    $this->load->view('_layouts/js');
    ?>
    
 	
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url() ?>dashboard" class="logo">
          <span class="logo-mini"><b>P</b></span>
          <span class="logo-lg" style="font-size:12pt;"><img width="40px" src="<?php echo base_url(); ?>asset/logo.png"> <b>PERPUSTAKAAN</b></span>
        </a>

        <?php $this->load->view('_layouts/navbar_v'); ?>
      </header>
      <?php $this->load->view('_layouts/sidebar_v'); ?>
      <div class="content-wrapper">
        <section class="content">
          <?php
            $this->load->view($content);
          ?>
        </section>
      </div>
      <script type="text/javascript">
      function check_int(evt) {
            var charCode = ( evt.which ) ? evt.which : event.keyCode;
            return ( charCode >= 48 && charCode <= 57 || charCode == 8 );
        }
      </script>
      <?php $this->load->view('_layouts/footer_v'); ?>
    </div>
  </body>
</html>
