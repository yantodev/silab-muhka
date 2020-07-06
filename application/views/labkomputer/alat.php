<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Alat Laboratorium Komputer</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success" role="alert">
                    <b><?= $this->session->flashdata('flash'); ?></b>
                </div>
            <?php endif; ?>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">Tambah Alat</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Alat</th>
                        <th>Jenis Alat</th>
                        <th>Jumlah Alat</th>
                        <th>Alat Rusak</th>
                        <th>Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($alat as $a) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['nama_alat']; ?></td>
                            <td><?= $a['jenis_alat']; ?></td>
                            <td><?= $a['jumlah_alat']; ?></td>
                            <td><?= $a['alat_rusak']; ?></td>
                            <td><?= $a['satuan_alat']; ?></td>
                            <td>
                                <a href="<?= base_url('labkomputer/editAlat/' . $a['id']); ?>" target="_blank"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('labkomputer/editAlat/' . $a['id']); ?>" target="_blank"><button class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- MODAL -->
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Alat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('labkomputer/addAlat'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Nama Alat">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="menu_id" name="menu_id">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jumlah_alat" name="jumlah_alat" placeholder="jumlah alat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alat_rusak" name="alat_rusak" placeholder="Jumlah Alat Rusak">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="satuan_alat" name="satuan_alat" placeholder="Satuan Alat">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->