<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login-Koperasi Mitra Usaha Waskat</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>icon.ico" type="image/x-icon" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/theme_admin/css/custome.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <br><br>
    
    <p align="center">
        
    </p>
    <div class="form-box" id="login-box">
        <div class="header"><img height='80' align="center" >SISTEM KOPERASI SIMPAN PINJAM</div>
        <form action="" method="post">
            <div class="body bg-gray">

            <?php if($jenis == 'member') { ?>
					<h4>Member Login - <a href="<?php echo site_url('login'); ?>" class="btn btn-primary">Admin/Opreator</a></h4>
				<?php } else { ?>
					<h4>Admin / Operator Login - <a href="<?php echo site_url('member'); ?>" class="btn btn-primary">Member</a></h4>
				<?php } ?>

				<?php 
				if (!empty($pesan)) {
					echo '<div style="color: red;">' . $pesan . '</div>';
				}
				?>
                <div class="form-group">
                    <input type="text" name="u_name" id="u_name" class="form-control" placeholder="Masukan Username" value="<?php echo set_value('u_name');?>" />
                    <?php echo form_error('u_name', '<p style="color: red;">', '</p>');?>
                </div>
                <div class="form-group">
                    <input type="password" name="pass_word" class="form-control" placeholder="Masukan Password" />
                    <?php echo form_error('pass_word', '<p style="color: red;">', '</p>');?>
                </div> 
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="footer"> 
                Belum Punya Akun?
                <a href="<?php echo site_url('register'); ?>" style="text-align: right;">Register</a> atau

                <a href="<?php echo site_url('RegisterAnggota'); ?>" style="text-align: right;">Daftar Anggota</a>
            </div>
        </form>
    </div>

    <!-- jQuery 2.0.2 -->
    <script src="<?php echo base_url(); ?>assets/theme_admin/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/theme_admin/js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#u_name').focus();
        });
    </script>

</body>
</html>
