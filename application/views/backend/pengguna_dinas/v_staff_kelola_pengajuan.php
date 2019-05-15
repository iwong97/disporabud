<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:17:07 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Pengajuan </title>

    <link href="<?php echo base_url() ?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                             </span>
                        <a href="<?php echo base_url() ?>c_disporabud/index">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?php echo $this->session->nama_lengkap ?></strong>
                             </span> <span class="text-muted text-xs block">Staff </span> </span> </a>
                    </div>
                </li><br>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/dashboardStaff"><i class="fa fa-"></i> <span class="nav-label"> Dashboard</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/pengajuan"><i class="fa fa-"></i> <span class="nav-label">Kelola Pengajuan</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/kelola_prasarana"><i class="fa fa-"></i> <span class="nav-label"> Kelola Prasarana</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/laporanStaff"><i class="fa fa-">
                    </i> <span class="nav-label">Laporan Peminjaman</span></a>
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
                    <span class="m-r-sm text-muted welcome-message">Welcome to Dashboard STAFF </span>
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
                        Daftar Pengajuan Peminjaman
                        <!-- <a href="<?php echo base_url() ?>c_disporabud/tambahPrasarana" class="pull-right">
                            <button class="btn btn-primary">Tambah Prasarana</button>
                        </a> -->
                    </h2>
                </div>
                <div class="col-lg-12" style="margin-top: 15px">
                <!-- <?php if (!empty($notifikasi_bayar) and $notifikasi_bayar > 0):?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    Ada <?php echo $notifikasi_bayar?> Pembayaran Belum diperiksa
                    </div>
                <?php endif;?> -->
                    <?php if (!empty($notifikasi_acc) and $notifikasi_acc > 0):?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    Ada <?php echo $notifikasi_acc?> Pengajuan Belum Diperiksa
                    </div>
                <?php endif;?>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                        <tr>
                                        <th>No Peminjaman</th>
                                        <th>No KTP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Acara</th>
                                        <th>Prasarana</th>
                                        <th>Lihat Proposal</th>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Status Approval</th>
                                        <th>Status Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $d) {?>
                                            <tr>
                                                <td><?php echo $d->id_peminjaman ?></td>
                                                <td><?php echo $d->no_ktp ?></td>
                                                <td><?php echo $d->nama_lengkap ?></td>
                                                <td><?php echo $d->nama_acara ?></td>
                                                <td><?php echo $d->nama_prasarana ?></td>
                                                <?php if ($d->bukti_pembayaran == "-"): ?>
                                                
                                                <?php endif;?>
                                                <td>
                                                <a href="<?php echo base_url() ?>c_disporabud/view_pdf/<?php echo $d->pdf ?>" class="btn btn-success" target="_blank">Download PDF</button>
                                                
                                                </td>
                                                <td><?php echo date('d F Y', $d->tgl_pelaksanaan). " - ". date('d F Y', $d->tgl_selesai)?></td>

                                        <td>

                                        <?php if ($d->approval_pengajuan == 'Belum diapprove') {?>
                                            <a href="<?php echo base_url() ?>c_disporabud/accPengajuan/<?php echo $d->id_transaksi ?>">
                                                <button class="btn btn-sm btn-primary">Approve</button>
                                            </a>
                                            <a data-toggle="modal" data-target="#m2<?php echo $d->id_transaksi ?>">
                                                <button class="btn btn-sm btn-danger">Ditolak</button>
                                            </a>

                                    <!-- ini modal -->
                                        <div class="modal inmodal" id="m2<?php echo $d->id_transaksi ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                    <div class="modal-content animated bounceInRight">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <h4 class="modal-title">Tolak Pengajuan</h4>
                                                            <!-- <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                                                        </div>
                                                    <div class="modal-body text-center">
                                                        <form method="post" action="<?php echo base_url();?>c_disporabud/alasanTolak/<?php echo $d->id_transaksi?>"
                                                        <div class="form-group text-center">
                                                            <label>Alasan Penolakan</label><br><br>
                                                            <input name="alasan" class="form-control" type="text" required/>
                                                            <button class="btn btn-success">Send</button>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                            <?php } else {?>
                                                <?php if ($d->approval_pengajuan == 'Ditolak') {?>
                                                    Ditolak
                                                <?php } else {?>
                                                <?php 
                                                        if ($d->status_pembayaran == 'Belum dibayar' && now() - strtotime($d->tgl_pengajuan) > 86400){?>

                                                    Ditolak
                                                        <?php } else {echo "Approved";}?>

                                                <?php }?>
                                            <?php }?>
                                        </td>

                                        <td>
                                        <?php if ($d->status_pembayaran == 'Belum dibayar') {
                                            if (now() - strtotime($d->tgl_pengajuan) > 86400){
                                                echo "Pembayaran Expired";
                                            } else {
                                            echo "Konfirmasi Kasir"; 
                                                
                                            }?> 
                                           
                                            <?php 
                                            } else {?>
                                                <?php if ($d->status_pembayaran == 'Ditolak') {?> 
                                                    Pending
                                                <?php } else {?>
                                                    Sudah Bayar
                                                <?php }?>
                                            <?php }?>
                                        </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                            </table>
                        </div>
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

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() ?>assets/backend/js/inspinia.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [

                ]

            });

        });

    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:17:09 GMT -->
</html>
