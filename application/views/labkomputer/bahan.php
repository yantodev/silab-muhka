<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Bahan Laboratorium Komputer</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success" role="alert">
                    <b><?= $this->session->flashdata('flash'); ?></b>
                </div>
            <?php endif; ?>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">Tambah Bahan</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Bahan</th>
                        <th>Jenis Bahan</th>
                        <th>Jumlah Bahan</th>
                        <th>Bahan Rusak</th>
                        <th>Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($bahan as $a) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['nama_bahan']; ?></td>
                            <td><?= $a['jenis_bahan']; ?></td>
                            <td><?= $a['jumlah_bahan']; ?></td>
                            <td><?= $a['bahan_rusak']; ?></td>
                            <td><?= $a['satuan_bahan']; ?></td>
                            <td>
                                <a href="<?= base_url('labkomputer/editBahan/' . $a['id']); ?>" target="_blank"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('labkomputer/editBahan/' . $a['id']); ?>" target="_blank"><button class="btn btn-danger">Hapus</button></a>
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
                <h4 class="modal-title">Tambah Bahan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('labkomputer/addBahan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" placeholder="Nama Bahan">
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
                        <input type="text" class="form-control" id="jumlah_bahan" name="jumlah_bahan" placeholder="jumlah Bahan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="bahan_rusak" name="bahan_rusak" placeholder="Jumlah bahan Rusak">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="satuan_bahan" name="satuan_bahan" placeholder="Satuan bahan">
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