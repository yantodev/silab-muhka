<div class="register-box">
    <div class="register-logo">
        <a href=""><b>Admin | Regitration</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="" method="post">
                <div class="input-group mb-3 col">
                    <select name="level_id" id="level_id">
                        <option value="">--Pilih Jenis Akun--</option>
                        <option value="1">Administartor</option>
                        <option value="2">Teknisi Lab Komputer</option>
                        <option value="3">Toolsman TKRO</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Full name" value="<?= set_value('nama'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('nama'); ?></small>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nbm" name="nbm" placeholder="NBM" value="<?= set_value('nbm'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('nbm'); ?></small>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= set_value('jabatan'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('jabatan'); ?></small>
                <div class="input-group mb-3">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('email'); ?></small>
                <div class="input-group mb-3">
                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('password1'); ?></small>
                <div class="input-group mb-3">
                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="login-box-msg">
                <a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>