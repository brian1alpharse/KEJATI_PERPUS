<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div id="xloading" class="grspinner" style="display:none">
      <div class="rect1"></div>
    	<div class="rect2"></div>
    	<div class="rect3"></div>
  </div>
  
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
	
      <li class="dropdown user user-menu">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
        <ul class="dropdown-menu">
          <li class="user-footer">
            <div class="pull-left">
              <a href="<?php echo base_url() ?>Login/profile" class="btn btn-default btn-flat">
                <i class="fa fa-user" onclick="Profil()"></i> Profil
              </a>
            </div>
            <div class="pull-right"> 
              <a href="<?php echo base_url() ?>Login/logout" class="btn btn-default btn-flat">
                <i class="fa fa-sign-out" onclick="logout()"></i> Keluar
              </a> 
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<script type="text/javascript">
    //fungsi ini dipanggil di baris 55
    function logout()
    {
      //alihkan ke fungsi "logout" ("controllers/Clogin.php" baris 81-88)
      location.href='<?php echo site_url('Login/logout') ?>';
    }
    function Profile(){
      location.href='<?php echo site_url('Login/profile') ?>';
    }
  </script>