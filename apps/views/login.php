
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN | SIPEKA</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="<?php echo base_url() ?>asset/logo.png" type="image/png" sizes="32x32">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/app.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-box-body">
			<div class="login-logo">
                <img src="<?php echo base_url() ?>asset/logo.png" width="90px" >
			</div>

            <form id="login-form"  method="post">
                <div id="msg"></div>
				<div class="login-title">
					SISTEM PERPUSTAKAAN
				</div>
                <!-- <div class="login-title" style="font-size: 10px">Sistem Perpustakaan</div> -->
                <div class="form-group has-feedback">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                    <!--span class="ion ion-ios-email form-control-feedback"></span-->
                </div>
                <div class="form-group has-feedback">
                    <input type="password" autocomplete="off" id="password" name="password" class="form-control" placeholder="Password">
                    <!--span class="ion ion-ios-locked form-control-feedback"></span-->
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="text-center">
                        <button id="submit-form" type="submit" class="btn btn-primary btn-action-login">Login 123</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

			<!--div class="text-center login-action">
				<p><a href="register" class="text-center">Daftar akun baru</a></p>
			</div-->

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    
    <script src="<?php echo base_url() ?>asset/app.js"></script>
    <!--script src="<?php echo base_url() ?>assets/js/login.js"></script-->
    <script type="text/javascript">
        

        $(document).ready(function(){
            $('#submit-form').text("Login");
            $('#login-form').submit(function(e){
                e.preventDefault();
                 $('#submit-form').text("Check");
                var url = '<?php echo base_url(); ?>';
                var user = $('#login-form').serialize();
                var login = function(){
                    $.ajax({
                        type: 'POST',
                        url: url + 'Login/check_login',
                        dataType: 'json',
                        data: user,
                        // beforeSend:function() {
                        //     $('#submit-form').prop("disabled", true);
                        //     $('#submit-form').text("Loading...");
                        // },
                        success:function(response){
                            $('#msg').html(response.message);
                            
                            if(response.error){
                                $('#msg').removeClass('alert-success').addClass('alert-danger').show();
                                window.location.replace(response.link);
                            }
                            else{
                                $('#msg').removeClass('alert-danger').addClass('alert-success').show();
                                $('#login-form')[0].reset();
                                setTimeout(function(){
                                    //location.reload();
                                    window.location.replace(response.link);
                                }, 1);
                            }
                        }
                    });
                };
                setTimeout(login, 1);
            });
     
            $(document).on('click', '#clearMsg', function(){
                $('#msg').hide();
            });
        });
    </script>
    </body>
</html>
