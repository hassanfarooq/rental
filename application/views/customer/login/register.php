<?php include 'header.php'; ?>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="<?php echo site_url(); ?>"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

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

        <form action="<?php echo site_url('Customer/Login/create_customer'); ?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="name" class="form-control" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="agreement"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
            <?php echo isset($errors)? $errors : null; ?>
        </form>

       <!-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                Google+</a>
        </div> -->

        <a href="<?php echo site_url('Customer/Login'); ?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->
<?php include 'footer.php'; ?>
