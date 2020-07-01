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