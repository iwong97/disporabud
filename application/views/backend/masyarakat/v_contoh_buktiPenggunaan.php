<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:17:07 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Selamat Datang</title>

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
                    <a href="<?php echo base_url() ?>c_disporabud/historyPenyewaan"><i class="fa fa"></i> <span class="nav-label">Histori Peminjaman</span></a>
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
                	<h2>Bukti Penggunaan</h2><br>

        <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <?php
            // if ($status->status == "Dikembalikan") {
            //     ?>
            //     <h3>Status : Dikembalikan</h3>
            //     <p>Harap untuk melengkapi isian form biodata.</p> -->
            <?php

             if ($status_pembayaran == "Approve pembayaran") {
            ?>
                <input type="button" class="btn btn-info" onclick="printDiv('printableArea')" value="Cetak" />
                <div id="printableArea">
                    <h3 style="color: green">Status : Diterima</h3>
                    <p>SURAT KEPUTUSAN KEPALA SMPN 4 PURWAKARTA<br>
                        Nomor : <br>
                        Tentang<br>
                        KELULUSAN PPDB SMPN 4 PURWAKARTA TAHUN PELAJARAN 2018-2019<br><br>

                        Mengingat : <br>
                        1. Undang-undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional<br>
                        2. PERATURAN MENTERI PENDIDIKAN DAN KEBUDAYAAN : Nomor 14 Tahun 2018 tentang Penerimaan Peserta Didik Baru pada Taman Kanak-Kanak, Sekolah Dasar, Sekolah Menengah Pertama, Sekolah Menengah Atas, Sekolah Menengah Kejuruan, atau bentuk lain yang sederajat.<br>
                        3. Permendiknas No.19 Tahun 2007, tentang Stabdar Pengelolaan Pendidikan Dasar dan Menengah.<br><br>

                        Menimbang :<br>
                        1. Hasil Verifikasi Data yang kami terima sesuai dengan waktu yang telah ditentukan.<br>
                        2. Hasil Nilai Ujian Nasional dan verifikasi yang kami teeima sesuai waktu yang telah ditentukan.<br><br>

                        Menetapkan :<br>
                        Bahwa Penerimaan Peserta Didik Baru Tahun <?php echo date('Y'); ?> SMP NEGERI 4 PURWAKARTA, dengan : <br>
                        Nama : <?= $nama_lengkap; ?><br>
                        NISN : <?= $no_ktp; ?><br>
                        <!-- Asal Sekolah : <?= $status->asal_sekolah; ?><br> -->
                        dinyatakan : DITERIMA<br>
                        Sebagai Calon Peserta Didik Baru di<br>
                        SMPN 4 PURWAKARTA TAHUN <?php echo date('Y'); ?><br><br>

                        CATATAN : <br>
                        - Silahkan lakukan Proses Daftar Ulang dan pembayaran Untuk Menyelesaikan Proses Pendaftaran<br>
                        - Harap daftar ulang dan Pembayaran hingga tanggal yang telah ditentukan</p>
                </div>
            <?php
            } 
            // elseif ($status->status == "Ditolak") {
            // // ?>
            // //     <h3 style="color: red">Status : Ditolak</h3>
            // //     <p>
            // //         Mohon Maaf kepada Sdr. <?= $status->nama; ?> sebagai calon siswa smpn 4 purwakarta dengan nisn <?= $status->nisn; ?> anda dinyatakan TIDAK DITERIMA sebagai siswa baru SMPN 4 Purwakarta, Kami merekomendasikan anda untuk mendaftarkan ke sekolah berikut :<br>
            // //         1. SMPN 9 Purwakarta<br>
            // //         2. SMPN 10 Purwakarta<br>
            // //         3. SMPN 1 Campaka<br>
            // //     </p>
            // // <?php
            // // } else {
            // // ?>
            // //     <h2>Belum Ada pengumuman</h2>
            // // <?php
            // // }
            // // ?>

</div>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
                    
        </tbody>
            </table>
                </div>
                    </div>
                </div>
            </div>
            </div>-->
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
                pageLength: 25,
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
