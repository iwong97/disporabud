<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:17:07 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome Admin</title>

    <link href="<?php echo base_url() ?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
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
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">ADMIN MASTER</strong>
                             </span> </span> </a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/index">
                        <i class="fa fa-desktop"></i> <span class="nav-label">Kelola User</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/admin_peminjaman">
                        <i class="fa fa-desktop"></i> <span class="nav-label">Kelola Peminjaman</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/admin_prasarana">
                        <i class="fa fa-desktop"></i> <span class="nav-label">Kelola Prasarana</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/index">
                        <i class="fa fa-desktop"></i> <span class="nav-label">Laporan Peminjaman</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/index">
                        <i class="fa fa-desktop"></i> <span class="nav-label">Laporan Pembayaran</span></a>
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
                    <span class="m-r-sm text-muted welcome-message">Welcome to Dashboard Admin </span>
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
            		<h2>
            			Grafik Peminjaman
            			<a href="<?php echo base_url() ?>c_disporabud/tambahPengguna" class="pull-right">
            				<button class="btn btn-primary">Tambah Pengguna</button>
            			</a>
            		</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Jumlah Peminjaman Prasarana per-Tahun </h5>
                                    <div class="ibox-tools">
                                        <select id="selectTahun"class="form-control" style="margin-top:10px;margin-bottom:20px;width:10%;display:inline-flex;">
                                        <?php foreach($tahun as $item):?>
                                        <option value="<?php echo $item->tahun?>"><?php echo $item->tahun?></option>
                                        <?php endforeach;?>
                                        </select>
                                        <button class="btn btn-primary" id="loadPeminjamanSarana" style="display:inline-flex;">Load</button>
                                        <a href="<?php echo base_url()?>/c_disporabud/laporanStaff" class="btn btn-success" style="display:inline-flex;">Show Details</a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div id="morris-bar-chart"></div>
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

    <script src="<?php echo base_url() ?>assets/backend/js/plugins/dataTables/datatables.min.js"></script>

        <script src="<?php echo base_url() ?>assets/backend/js/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/backend/js/plugins/morris/morris.js"></script>
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
        $("#loadPeminjamanSarana").click(() => {
        $("#morris-bar-chart").empty();
        var tahun = $("#selectTahun").val()
        console.log(tahun);
        $.getJSON("<?php echo base_url();?>c_disporabud/getLaporan/" + tahun, (data) => {
            Morris.Bar({
                element: 'morris-bar-chart',
                data: data,
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Pengajuan Diterima', 'Pengajuan Ditolak'],
                hideHover: 'auto',
                resize: true,
                ymax: 100,
                xLabelMargin:1,
                barColors: ['#04d9c4', '#800000'],
            });

        })
    })
    $("#loadPeminjamanSarana").click()

    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:17:09 GMT -->
</html>
