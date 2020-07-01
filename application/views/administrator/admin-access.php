<!-- /.card-header -->
<div class="card-body col-6">
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <h5>Level : <?= $level['level']; ?></h5>
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Menu</th>
                <th>Access</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($menu as $m) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $m['menu']; ?></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" <?= check_access($level['id'], $m['id']); ?> data-level="<?= $level['id']; ?>" data-menu="<?= $m['id']; ?>">
                        </div>
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
                <h4 class="modal-title">Add New Submenu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('administrator/adminlevel'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="level" name="level" placeholder="Nama Level">
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
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                    </div>
                    <div class="form-group col">
                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>
                        <label class="form-check-label" for="is_active">Active?</label>
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