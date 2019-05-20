<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:17:07 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Masyarakat </title>

    <link href="<?php echo base_url() ?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span> </span>
                        <a href="<?php echo base_url() ?>c_disporabud/index">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?php echo $this->session->nama_lengkap ?></strong>
                             </span> <span class="text-muted text-xs block">Pemohon </span> </span> </a>
                    </div>
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
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i> </a>
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
                <div class="col-lg-12">
                	<h2>Jadwal Penggunaan Prasarana</h2>
                    <!-- <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    Harap lakukan pembayaran sebelum :
                        <?php foreach ($bayar_sebelum as $bs) {?>
                            <?php echo date('d F Y', $bs->tgl_pelaksanaan); ?>
                        <?php }?>
                    </div> -->
                </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div id="calendar"></div>
                            </div>
                    </div>
                </div>
            </div>
                <!-- <div class="footer">
                    <div>
                        <strong>Copyright</strong> Example Company &copy; 2014-2017
                    </div>
                </div> -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/backend/js/jquery-3.1.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?php echo base_url() ?>assets/backend/js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() ?>assets/backend/js/inspinia.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 5,
                lengthMenu: [[5, 10, 20, -1], [5, 10, 20, "All"]],
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    
                ]

            });

        });

    </script>
    <script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
                dayClick: function() {
                    alert('a day has been clicked!');
                },
                events: <?php echo $events;?>
                });

    });
    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:17:09 GMT -->
</html>
