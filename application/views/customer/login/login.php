<?php include 'header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo site_url(); ?>"><b>E-CAR</b>RENTAL</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $flashData = $this->session->userdata('flashData'); ?>
        <?php if(isset($flashData) && !empty($flashData)){ ?>
            <div class="row">
                <div class="col-xs-12">
                    <?php if($flashData['status'] == 'success'){ ?>
                        <div class="alert alert-success">
                            <?php echo $flashData['message']; ?>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-danger">
                            <?php echo $flashData['message']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php $this->session->unset_userdata('flashData'); ?>
        <?php } ?>

        <form action="<?php echo site_url('Customer/Login/getLoggedIn'); ?>" method="post">
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <!--<div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
        </div>-->
        <!-- /.social-auth-links -->

        <a href="#
        ">I forgot my password</a><br>
        <a href="<?php echo site_url('Customer/Login/register'); ?>" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php include 'footer.php'; ?>