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