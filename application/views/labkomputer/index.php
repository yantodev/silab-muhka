<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $pc->jenis; ?><sup style="font-size: 20px">Pcs</sup></h3>

                    <p>Personal Computer</p>
                </div>
                <div class="icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <a href=" #" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $laptop->jenis; ?><sup style="font-size: 20px">Pcs</sup></h3>

                    <p>Laptop</p>
                </div>
                <div class="icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?= $alat; ?><sup style="font-size: 20px">Jenis</sup></h3>

                    <p>Alat</p>
                </div>
                <div class="icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <a href="<?= base_url('labkomputer/alat'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?= $bahan; ?><sup style="font-size: 20px">Jenis</sup></h3>

                    <p>Bahan</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="<?= base_url('labkomputer/alat'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="col-md-12">
        <!-- Bar chart -->
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Program Kerja Kepala Laboratorium
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?= $this->session->flashdata('message'); ?>
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
                                    <a href="<?= base_url('labkomputer/editProker/' . $d['id']); ?>" target="_blank"><i class="fa fa-edit fa-fw" title="edit"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body-->
        </div>
        <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->