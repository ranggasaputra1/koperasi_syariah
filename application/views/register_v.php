<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register-Koperasi Mitra Usaha Waskat</title>
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
        <?php echo form_open('register'); ?>
            <div class="body bg-gray">
                <center>
                <h3>Register</h3>
                </center>

                <?php if (!empty($pesan)) { ?>
                    <div style="color: red;"><?php echo $pesan; ?></div>
                <?php } ?>
                
                <div class="form-group">
                    <input type="text" name="u_name" id="u_name" class="form-control" placeholder="Username" value="<?php echo set_value('u_name');?>" required/>
                    <?php echo form_error('u_name', '<p style="color: red;">', '</p>');?>
                </div>
                
                <div class="form-group">
                    <input type="password" name="pass_word" class="form-control" placeholder="Password" required/>
                    <?php echo form_error('pass_word', '<p style="color: red;">', '</p>');?>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <div class="footer"> 
                Sudah punya akun? <a href="<?php echo site_url('login'); ?>">Login</a>
            </div>
        <?php echo form_close(); ?>
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
