<!DOCTYPE html>
<html lang="en">
<head><title>Log In</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Loading bootstrap css-->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/themes/style1/pink-violet.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/style-responsive.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">
</head>
<body id="signin-page">
<div class="page-form">
    <form action="index.html" class="form">
        <div class="header-content"><h1>APLIKASI WE SHARE</h1></div>
        <div class="body-content"><p>Log in dengan media sosial:</p>

            <div class="row mbm text-center">
                <div class="col-md-4"><a href="<?php echo site_url('hauth/login/Twitter') ?>" class="btn btn-sm btn-twitter btn-block"><i class="fa fa-twitter fa-fw"></i>Twitter</a></div>
                <div class="col-md-4"><a href="<?php echo $login_url ?>" class="btn btn-sm btn-facebook btn-block"><i class="fa fa-facebook fa-fw"></i>Facebook</a></div>
                <div class="col-md-4"><a href="#" class="btn btn-sm btn-google-plus btn-block"><i class="fa fa-google-plus fa-fw"></i>Google Plus</a></div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" placeholder="Username" name="username" class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" placeholder="Password" name="password" class="form-control"></div>
            </div>
            <div class="form-group pull-left">
                <div class="checkbox-list"><label><input type="checkbox">&nbsp;
                    Keep me signed in</label></div>
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-success">Log In
                    &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="clearfix"></div>
            <div class="forget-password"><h4>Lupa Password?</h4>

                <p>Klik <a href='#' class='btn-forgot-pwd'>disini</a> untuk reset password anda.</p></div>
            <hr>
            <p>Belum Punya Akun? <a id="btn-register" href="<?php echo site_url('welcome/signup') ?>">Register Sekarang</a></p></div>
    </form>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="<?php echo base_url() ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
<script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/iCheck/custom.min.js"></script>
<script>//BEGIN CHECKBOX & RADIO
$('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_minimal-grey',
    increaseArea: '20%' // optional
});
$('input[type="radio"]').iCheck({
    radioClass: 'iradio_minimal-grey',
    increaseArea: '20%' // optional
});
//END CHECKBOX & RADIO</script>
</script>
</body>
</html>