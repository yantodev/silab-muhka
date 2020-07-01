<!-- /.card-header -->
<div class="card-body col-6">
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= $this->session->flashdata('message'); ?>
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">Add Menu</a>
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Menu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($menu as $m) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $m['menu']; ?></td>
                    <td>
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

<!-- MODAL -->
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
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