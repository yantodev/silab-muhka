<div class="card card-info col-6">
    <div class="card-header">
        <h3 class="card-title"><?= $user['nama']; ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= form_open_multipart('administrator/editProfile'); ?>
    <div class="card-body">
        <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Full Name" value="<?= $user['nama']; ?>">
            </div>
        </div>
        <small class="text-danger"><?= form_error('nama'); ?></small>
        <div class="form-group row">
            <label for="nbm" class="col-sm-3 col-form-label">NBM</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nbm" name="nbm" placeholder="NBM" value="<?= $user['nbm']; ?>">
            </div>
        </div>
        <small class="text-danger"><?= form_error('nbm'); ?></small>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= $user['jabatan']; ?>">
            </div>
        </div>
        <small class="text-danger"><?= form_error('jabatan'); ?></small>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?= $user['email']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label">Picture</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Piliih File</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-info float-right">Update</button>
    </div>
    <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->
</div>