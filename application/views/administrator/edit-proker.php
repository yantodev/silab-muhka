<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="">
                        <input type="hidden" name="id" class="form-control" id="id" value="<?= $proker['id']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input name="kegiatan" class="form-control" id="kegiatan" value="<?= $proker['kegiatan']; ?>">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Target</label>
                                <textarea style="width:100%; height:250px" name="target" class="form-control" id="target" value=""><?= $proker['target']; ?></textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Waktu</label>
                                <input name="waktu" class="form-control" id="waktu" value="<?= $proker['waktu']; ?>">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" id="status">
                                    <?php foreach ($status as $d) : ?>
                                        <?php if ($d == $proker['status']) : ?>
                                            <option value="<?= $d; ?>" selected><?= $d; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d; ?>"><?= $d; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>