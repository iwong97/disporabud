<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:14:36 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Upload Bukti Pembayaran</title>

    <link href="<?php echo base_url() ?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <!-- <img alt="image" class="img-circle" src="<?php echo base_url() ?>assets/backend/img/profile_small.jpg" /> -->
                             </span>
                        <a href="<?php echo base_url() ?>c_disporabud/index">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->nama_lengkap ?></strong>
                             </span> <span class="text-muted text-xs block">Pemohon</span> </span> </a>
                    </div>
                </li>
                <li><br>
                    <a href="<?php echo base_url() ?>c_disporabud/index"><i class="fa fa-"></i> <span class="nav-label">Jadwal Penggunaan</span></a>
                </li>
                <li><br>
                    <a href="<?php echo base_url() ?>c_disporabud/index"><i class="fa fa-"></i> <span class="nav-label">Jadwal Penggunaan</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/gambarPeminjaman"><i class="fa fa-"></i> <span class="nav-label">Pengajuan Peminjaman</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa"></i> <span class="nav-label">Akun</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="<?php echo base_url() ?>c_disporabud/editProfilMasyarakat">Edit Profil</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>c_disporabud/editPasswordMasyarakat">Ubah Pasword</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/v_buktiPembayaran"><i class="fa fa-">
                    </i> <span class="nav-label"> Konfirmasi Pembayaran</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/historyPenyewaan"><i class="fa fa"></i> <span class="nav-label">Histori Peminjaman</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/cetakBuktiPenggunaan"><i class="fa fa"></i> <span class="nav-label">Bukti Penggunaan</span></a>
                </li>
                
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Dashboard Masyarakat </span>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Upload</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            
            </div>
            <div class="row">
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Upload Bukti Pembayaran</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <?php foreach ($data as $d) { ?>
                            <form method="POST" class="form-horizontal" action="<?php echo base_url() ?>c_disporabud/buktiPembayaran?bayar=<?php echo $d->id_transaksi ?>" enctype="multipart/form-data">
                                    <div class="form-group"><label class="col-sm-2 control-label">ID Peminjaman</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" readonly="" name="id" 
                                            value="<?php echo $d->id_peminjaman ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Acara</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" readonly="" name="acara" 
                                            value="<?php echo $d->nama_acara ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Prasarana</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" readonly="" name="prasarana" value="<?php echo $d->nama_prasarana ?>">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Tanggal Pelaksanaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" readonly="" name="tgl_pelaksanaan" 
                                            value="<?php echo date('d F Y', $d->tgl_pelaksanaan). " - ". date('d F Y', $d->tgl_selesai) ?>">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Total Tarif</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" readonly="" name="tarif" value="<?php echo "Rp. ".number_format($d->total_harga,0,",",".") ?>">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Bukti Pembayaran</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control" name="bukti_pembayaran" required="">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Upload Pembayaran">
                                            
                                        </div>
                                    </div>
                                <?php } ?>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <!-- <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div> -->
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/backend/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() ?>assets/backend/js/inspinia.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:14:37 GMT -->
</html>
