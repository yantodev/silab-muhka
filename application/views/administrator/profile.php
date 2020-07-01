<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <?= $this->session->flashdata('message'); ?>
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/images/profile/') . $user['image']; ?>">
                        </div>

                        <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>

                        <p class="text-muted text-center"><?= $user['jabatan']; ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NBM</b> <a class="float-right"><?= $user['nbm']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>E-mail</b> <a class="float-right"><?= $user['email']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Tanggal Daftar</b> <a class="float-right"><?= date('d F Y ', $user['date_created']); ?></a>
                            </li>
                        </ul>

                        <a href="<?= base_url('administrator/editprofile'); ?>" class="btn btn-primary btn-block"><b>Update Data</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>