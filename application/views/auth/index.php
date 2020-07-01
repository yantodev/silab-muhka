<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Login | Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('email'); ?></small>
                <div class="input-group mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('password'); ?></small>
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
        </div>
        </form>
        <div class="login-box-msg">
            <p class="mb-2">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->