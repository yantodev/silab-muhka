<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Akun</h3>
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
                        <th>Nama</th>
                        <th>NBM</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $d) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['nbm']; ?></td>
                            <td><?= $d['jabatan']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= check_aktivasi($d['is_active']); ?> data-aktivasi="<?= $d['is_active']; ?>">
                                </div>
                                <!-- <a href=" <?= base_url('administrator/akunAktivasi/' . $d['id']); ?>" target="_blank"><button class="btn btn-primary">AKTIVASI</button></a> -->
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