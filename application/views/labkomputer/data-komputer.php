<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Calon Siswa</h3>
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
                        <th>Ruang</th>
                        <th>No_Komp</th>
                        <th>Manufacture</th>
                        <th>Processor</>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $d) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['room']; ?></td>
                            <td><?= $d['no_komputer']; ?></td>
                            <td><?= $d['sys_manufacture']; ?></td>
                            <td><?= $d['processor']; ?></td>
                            <td><?= $d['status']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>labkomputer/detail/<?= $d['no_id']; ?>"><i class="fa fa-eye fa-fw" alt="detail" title="View Detail"></i></a>
                                <a href="<?= base_url('labkomputer/edit/' . $d['no_id']); ?>" target="_blank"><i class="fa fa-edit fa-fw" alt="Edit" title="Edit"></i></a>
                                <a href="<?= base_url(); ?>labkomputer/hapus/<?= $d['no_id']; ?>" target="_blank"><i class="fa fa-trash fa-fw" alt="hapus" title="Hapus" onclick="return confirm('Yakin ingin menghapus?');"></i></a>
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
                        <label>Tanggal Masuk</label>
                        <input type="date" class="form-control" id="in_date" name="in_date">
                    </div>
                    <div class="form-group">
                        <label>Ruang</label>
                        <select name="room" id="room" class="form-control">
                            <option value="">---Pilih Ruang---</option>
                            <?php foreach ($ruang as $r) : ?>
                                <option value="<?= $r; ?>"><?= $r; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. Komputer</label>
                        <input type="text" class="form-control" id="no_komputer" name="no_komputer">
                    </div>
                    <div class="form-group">
                        <label>Nama System</label>
                        <input type="text" class="form-control" id="sys_name" name="sys_name">
                    </div>
                    <div class="form-group">
                        <label>Manufacture System</label>
                        <input type="text" class="form-control" id="sys_manufacture" name="sys_manufacture">
                    </div>
                    <div class="form-group">
                        <label>Model System</label>
                        <input type="text" class="form-control" id="sys_model" name="sys_model">
                    </div>
                    <div class="form-group">
                        <label>Type System</label>
                        <input type="text" class="form-control" id="sys_type" name="sys_type">
                    </div>
                    <div class="form-group">
                        <label>Prosesor</label>
                        <input type="text" class="form-control" id="processor" name="processor">
                    </div>
                    <div class="form-group">
                        <label>CPU</label>
                        <input type="text" class="form-control" id="cpu" name="cpu">
                    </div>
                    <div class="form-group">
                        <label>Jenis Alat</label>
                        <input type="text" class="form-control" id="jenis" name="jenis">
                    </div>
                    <div class="form-group">
                        <label>Status Alat</label>
                        <input type="text" class="form-control" id="status" name="status">
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