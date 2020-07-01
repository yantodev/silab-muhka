<!-- /.card-header -->
<div class="card-body col-6">
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">Add Admin</a>
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($level as $l) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $l['level']; ?></td>
                    <td>
                        <a href="<?= base_url('administrator/adminaccess/') . $l['id']; ?>" class="badge badge-warning">Access</a> |
                        <a href="" class="badge badge-success">Edit</a> |
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.card-body -->
</div>