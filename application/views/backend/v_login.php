<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:13:18 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN | DISPORAPARBUD</title>

    <link href="<?php echo base_url() ?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/backend/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <br><br><br><br><br><br>

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>Welcome to DISPORAPARBUD </h3>
            <h5> LOGIN </h5>

            <p><?php echo $this->session->flashdata('pesan') ?></p>
            <form method="post" class="m-t" role="form" action="<?php echo base_url() ?>c_disporabud/login">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url() ?>c_disporabud/v_lupaPassword">Lupa Password?</a>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url() ?>c_disporabud/daftar/masyarakat">Register Akun</a>
            </form>
            <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p> -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/backend/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 07:13:18 GMT -->
</html>
