<div class="col-10">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Perangkat Laboratorium Komputer</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success" role="alert">
                    <b><?= $this->session->flashdata('flash'); ?></b>
                </div>
            <?php endif; ?>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">Tambah Perangkat</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jenis</th>
                        <th>Perangkat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($perangkat as $a) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['nama_jenisperangkat']; ?></td>
                            <td><?= $a['type_jenisperangkat']; ?></td>
                            <td>
                                <a href="<?= base_url('labkomputer/editPerangkat/' . $a['id']); ?>" target="_blank"><button class="btn btn-primary">Edit</button></a>
                                <a href="<?= base_url('labkomputer/editPerangkat/' . $a['id']); ?>" target="_blank"><button class="btn btn-danger">Hapus</button></a>
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
                <h4 class="modal-title">Tambah Perangkat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('labkomputer/addPerangkat'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" placeholder="Nama Jenis">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="menu_id" name="menu_id">
                            <option value="">---Select---</option>
                            <?php foreach ($pilih as $d) : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endforeach; ?>
                        </select>
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