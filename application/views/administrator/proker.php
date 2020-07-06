<div class="card-body">
    <table id="example2" class="table table-bordered table-striped">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modal">Tambah Program Kerja</a>
        <p class="mb-3 ml-2 nav-icon fa fa-file-excel">Import Excel -> </p>
        <input type="file" class="file mb-3 ml-2">
        <thead>
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Target</th>
                <th>Waktu</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($proker as $d) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['kegiatan']; ?></td>
                    <td><?= $d['target']; ?></td>
                    <td><?= $d['waktu']; ?></td>
                    <td><?= $d['status']; ?></td>
                    <td>
                        <a href="<?= base_url('administrator/editProker/' . $d['id']); ?>" target="_blank"><i class="fa fa-edit fa-fw" title="edit"></i></a>
                        <a href="<?= base_url(); ?>administrator/hapus/<?= $d['id']; ?>" target="_blank"><i class="fa fa-trash fa-fw" title="Hapus" onclick="return confirm('Yakin ingin menghapus?');"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Program Kerja</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('administrator/proker'); ?>" method="post">
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>Kegiatan</label>
                            <textarea name="kegiatan" id="kegiatan" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="mb-2">
                            <label>Target</label>
                            <textarea name="target" id="target" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <label>Waktu</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Waktu">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->