<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Peminjaman</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success" role="alert">
                    <b><?= $this->session->flashdata('flash'); ?></b>
                </div>
            <?php endif; ?>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">Tambah Data</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Barang</th>
                        <th>Keperluan</>
                        <th>Status</th>
                        <th>Tgl_kembali</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $d) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['nama_pinjam']; ?></td>
                            <td><?= $d['nama_barang']; ?></td>
                            <td><?= $d['keperluan']; ?></td>
                            <td><?= $d['status']; ?></td>
                            <td><?= $d['tgl_kembali']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>labkomputer/detail/<?= $d['id']; ?>"><i class="fa fa-eye fa-fw" alt="detail" title="View Detail"></i></a>
                                <a href="<?= base_url('labkomputer/edit/' . $d['id']); ?>" target="_blank"><i class="fa fa-edit fa-fw" alt="Edit" title="Edit"></i></a>
                                <a href="<?= base_url(); ?>labkomputer/hapus/<?= $d['id']; ?>" target="_blank"><i class="fa fa-trash fa-fw" alt="hapus" title="Hapus" onclick="return confirm('Yakin ingin menghapus?');"></i></a>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Komputer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('labkomputer/datakomputer'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                    </div>
                    <div class="form-group">
                        <label>Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama_pinjam" name="nama_pinjam">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                    </div>
                    <div class="form-group">
                        <label>No. Inventaris</label>
                        <input type="text" class="form-control" id="no_inv" name="no_inv">
                    </div>
                    <div class="form-group">
                        <label>Keperluan</label>
                        <input type="text" class="form-control" id="keperluan" name="keperluan">
                    </div>
                    <div class="form-group">
                        <label>Catatan</label>
                        <input type="text" class="form-control" id="catatan_pinjam" name="catatan_pinjam">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="room" id="room" class="form-control">
                            <option value="">---Pilih Status---</option>
                            <?php foreach ($status as $r) : ?>
                                <option value="<?= $r; ?>"><?= $r; ?></option>
                            <?php endforeach; ?>
                        </select>
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
</div>