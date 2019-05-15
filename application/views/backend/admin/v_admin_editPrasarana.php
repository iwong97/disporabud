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
                    <a href="<?php echo base_url() ?>c_disporabud/admin_prasarana">
                        <i class="fa fa-desktop"></i> <span class="nav-label">Kelola Peminjaman</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>c_disporabud/kelola_prasarana">
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
                <div class="col-lg-10">
                    <h2>Edit Prasana</h2>
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
                            <h5>Silahkan Lengkapi Form Edit Prasarana</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <?php foreach ($data as $d) { ?>
                                
                            <form method="POST" class="form-horizontal" action="<?php echo base_url() ?>c_disporabud/editPrasarana/<?php echo $d->id_prasarana ?>" enctype="multipart/form-data">
                                <div class="form-group"><label class="col-sm-2 control-label">Nama Prasarana</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="nama_prasarana" value="<?php echo $d->nama_prasarana ?>"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tarif</label>
                                    <div class="col-sm-10"><input type="number" class="form-control" value="<?php echo $d->tarif ?>" name="tarif"></div>
                                </div>
                                <!-- <div class="form-group"><label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10"><input type="hidden" class="form-control" value="<?php echo $d->gambar ?>" name="tarif"></div>
                                </div> -->
                                <div class="form-group"><label class="col-sm-2 control-label">Foto Lama</label>
                                    <div class="col-sm-10">
                                        <img width="15%" src="<?php echo base_url().$d->gambar ?>">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload Foto Baru</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control" name="gambar" required="">
                                        </div>
                                    </div>

                                <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Edit Prasarana">
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

    <!-- Jasny -->
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- DROPZONE -->
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/dropzone/dropzone.js"></script>

    <!-- CodeMirror -->
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/plugins/codemirror/mode/xml/xml.js"></script>


    <script>
        Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
        };

        $(document).ready(function(){

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });

       });
    </script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:14:37 GMT -->
</html>
