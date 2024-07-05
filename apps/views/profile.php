<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<!-- utf-8 charset support -->
	<meta charset="UTF-8">
	<!-- responsive support -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- import file css bootstrap (offline) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css') ?>">
	<!-- menampilkan "icon" website pada "title" browser-->
	<link rel="icon" href="<?php echo base_url() ?>asset/logo.png" type="image/png" sizes="32x32">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/app.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<style type="text/css">
		.card {
		  	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  	max-width: 500px;
		  	margin: auto;
		  	text-align: center;
		  	border-radius: 25px;
		  	font-family: arial;
		  	background-color: #ffffff;
		}
		.card > .row{
			text-align: left;
		}
	</style>
</head>
<body style="padding: 10px">
	<h2 style="text-align: center;font-weight: bold;margin-bottom: 20px"><i class="fa fa-user" aria-hidden="true"></i> User Profile</h2>
	<div style="width: 99%">
		
		<!-- tampilkan provider ("controllers/Clogin.php" baris 64) -->
		<div class="card">
			<!-- tampilkan foto ("controllers/Clogin.php" baris 70) -->
			<div class="row" style="margin: 10px 0px">
				<div class="col-sm-12"><img src="<?php echo $foto ?>" style="width:100px; height:100px; margin: 0px 180px" /></div>
			</div>
			<div class="row" style="margin: 10px 0px">
				<div class="col-sm-3" style="background-color:lavender;">Nama</div>
				<div class="col-sm-9">: <?php echo $nama; ?></div>
			</div>
			<!-- tampilkan uid ("controllers/Clogin.php" baris 65) -->
			<div class="row" style="margin: 10px 0px">
				<div class="col-sm-3" style="background-color:lavender;">UID</div>
				<div class="col-sm-9">: <?php echo $uid; ?></div>
			</div>
		</div>
				
		
	</div>
	<div style="text-align: center;margin-top: 20px">
		<button class="btn btn-success" style="width: 250px" name="tambah" onclick="Data();"><i class="fa fa-database" aria-hidden="true"></i> Dashboard</button>		
	</div>


	<div style="text-align: center;margin-top: 20px">
		<button class="btn btn-success" style="width: 250px" name="tambah" onclick="logout();"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</button>		
	</div>

	<!-- import jquery (offline) -->	
	<script type="text/javascript" src="<?php echo base_url('asset/jquery.js') ?>"></script>
	<!-- import file js bootstrap (offline) -->	
	<script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.js') ?>"></script>
	<!-- import font-awesome (offline) -->	
	<script type="text/javascript" src="<?php echo base_url('asset/fa-icon.min.js') ?>"></script>

	<script type="text/javascript">
		//fungsi ini dipanggil di baris 55
		function logout()
	    {
		    //alihkan ke fungsi "logout" ("controllers/Clogin.php" baris 81-88)
		    location.href='<?php echo site_url('Login/logout') ?>';
	    }
		function Data()
		{
			//alihkan ke fungsi "logout" ("controllers/Clogin.php" baris 81-88)
			location.href='<?php echo site_url('dashboard') ?>';
		}
	</script>
</body>
</html>

