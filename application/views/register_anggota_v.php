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
    
    <p align="center"></p>
    <div class="form-box" id="login-box">
        <div class="header">
            <img height='80' align="center">
            SISTEM KOPERASI SIMPAN PINJAM
        </div>
        <?php echo form_open('registeranggota/submit'); ?>
            <div class="body bg-gray">
                <center>
                    <h3>Register Anggota</h3>
                </center>

                <?php if (!empty($pesan)) { ?>
                    <div style="color: red;"><?php echo $pesan; ?></div>
                <?php } ?>

                <div class="form-group">
                    <h4>Nama Lengkap</h4>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>" required/>
                    <?php echo form_error('nama', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Username</h4>
                    <input type="text" name="identitas" id="identitas" class="form-control" placeholder="Username" value="<?php echo set_value('identitas'); ?>" required/>
                    <?php echo form_error('identitas', '<p style="color: red;">', '</p>');?>
                </div>
                
                <div class="form-group">
                    <h4>Password</h4>
                    <input type="password" name="pass_word" class="form-control" placeholder="Password" value="<?php echo set_value('pass_word'); ?>" required/>
                    <?php echo form_error('pass_word', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Jenis Kelamin</h4>
                    <select name="jk" class="form-control" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L" <?php echo set_select('jk', 'L'); ?>>Laki-laki</option>
                        <option value="P" <?php echo set_select('jk', 'P'); ?>>Perempuan</option>
                    </select>
                    <?php echo form_error('jk', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Tempat Lahir</h4>
                    <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo set_value('tmp_lahir'); ?>" required/>
                    <?php echo form_error('tmp_lahir', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Tanggal Lahir</h4>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo set_value('tgl_lahir'); ?>" required/>
                    <?php echo form_error('tgl_lahir', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Status Perkawinan</h4>
                    <select name="status" class="form-control" required>
                        <option value="">Pilih Status Perkawinan</option>
                        <option value="Belum Kawin" <?php echo set_select('status', 'Belum Kawin'); ?>>Belum Kawin</option>
                        <option value="Kawin" <?php echo set_select('status', 'Kawin'); ?>>Kawin</option>
                        <option value="Cerai Hidup" <?php echo set_select('status', 'Cerai Hidup'); ?>>Cerai Hidup</option>
                        <option value="Cerai Mati" <?php echo set_select('status', 'Cerai Mati'); ?>>Cerai Mati</option>
                        <option value="Lainnya" <?php echo set_select('status', 'Lainnya'); ?>>Lainnya</option>
                    </select>
                    <?php echo form_error('status', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Status Guru</h4>
                    <select name="departement" class="form-control" required>
                        <option value="">Pilih Status Guru</option>
                        <option value="PNS" <?php echo set_select('departement', 'PNS'); ?>>PNS</option>
                        <option value="Non PNS" <?php echo set_select('departement', 'Non PNS'); ?>>Non PNS</option>
                    </select>
                    <?php echo form_error('departement', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Pekerjaan</h4>
                    <select name="pekerjaan" class="form-control" required>
                        <option value="">Pilih Pekerjaan</option>
                        <option value="TNI" <?php echo set_select('pekerjaan', 'TNI'); ?>>TNI</option>
                        <option value="PNS" <?php echo set_select('pekerjaan', 'PNS'); ?>>PNS</option>
                        <option value="Karyawan Swasta" <?php echo set_select('pekerjaan', 'Karyawan Swasta'); ?>>Karyawan Swasta</option>
                        <option value="Guru" <?php echo set_select('pekerjaan', 'Guru'); ?>>Guru</option>
                        <option value="Buruh" <?php echo set_select('pekerjaan', 'Buruh'); ?>>Buruh</option>
                        <option value="Tani" <?php echo set_select('pekerjaan', 'Tani'); ?>>Tani</option>
                        <option value="Pedagang" <?php echo set_select('pekerjaan', 'Pedagang'); ?>>Pedagang</option>
                        <option value="Wiraswasta" <?php echo set_select('pekerjaan', 'Wiraswasta'); ?>>Wiraswasta</option>
                        <option value="Mengurus Rumah Tangga" <?php echo set_select('pekerjaan', 'Mengurus Rumah Tangga'); ?>>Mengurus Rumah Tangga</option>
                        <option value="Penjahit" <?php echo set_select('pekerjaan', 'Penjahit'); ?>>Penjahit</option>
                        <option value="Pensiunan" <?php echo set_select('pekerjaan', 'Pensiunan'); ?>>Pensiunan</option>
                        <option value="Lainnya" <?php echo set_select('pekerjaan', 'Lainnya'); ?>>Lainnya</option>
                    </select>
                    <?php echo form_error('pekerjaan', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Agama</h4>
                    <select name="agama" class="form-control" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam" <?php echo set_select('agama', 'Islam'); ?>>Islam</option>
                        <option value="Katolik" <?php echo set_select('agama', 'Katolik'); ?>>Katolik</option>
                        <option value="Protestan" <?php echo set_select('agama', 'Protestan'); ?>>Protestan</option>
                        <option value="Hindu" <?php echo set_select('agama', 'Hindu'); ?>>Hindu</option>
                        <option value="Budha" <?php echo set_select('agama', 'Budha'); ?>>Budha</option>
                        <option value="Lainnya" <?php echo set_select('agama', 'Lainnya'); ?>>Lainnya</option>
                    </select>
                    <?php echo form_error('agama', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Alamat</h4>
                    <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" required><?php echo set_value('alamat'); ?></textarea>
                    <?php echo form_error('alamat', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Kota</h4>
                    <input type="text" name="kota" class="form-control" placeholder="Kota" value="<?php echo set_value('kota'); ?>" required/>
                    <?php echo form_error('kota', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Nomor Telepon</h4>
                    <input type="number" name="notelp" class="form-control" placeholder="Nomor Telepon" value="<?php echo set_value('notelp'); ?>" required/>
                    <?php echo form_error('notelp', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Tanggal Daftar</h4>
                    <input type="date" name="tgl_daftar" class="form-control" placeholder="Tanggal Daftar" value="<?php echo set_value('tgl_daftar'); ?>" required/>
                    <?php echo form_error('tgl_daftar', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Jabatan</h4>
                    <select name="jabatan_id" class="form-control" required>
                        <option value="">Jabatan</option>
                        <option value="1" <?php echo set_select('jabatan_id', '1'); ?>>Anggota</option>
                        <option value="2" <?php echo set_select('jabatan_id', '2'); ?>>Pengurus</option>
                    </select>
                    <?php echo form_error('jabatan_id', '<p style="color: red;">', '</p>');?>
                </div>

                <div class="form-group">
                    <h4>Aktif Keanggotaan</h4>
                    <select name="aktif" class="form-control" required>
                        <option value="">Aktif Keanggotaan</option>
                        <option value="Y" <?php echo set_select('aktif', 'Y'); ?>>Aktif</option>
                        <option value="N" <?php echo set_select('aktif', 'N'); ?>>Non Aktif</option>
                    </select>
                    <?php echo form_error('aktif', '<p style="color: red;">', '</p>');?>
                </div> <br>

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
            $('#identitas').focus();
        });
    </script>

</body>
</html>
