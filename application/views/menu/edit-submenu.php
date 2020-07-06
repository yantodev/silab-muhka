<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
<?php endif; ?>
<form action="" method="post" class="col-6">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $submenu['title']; ?>">
    </div>
    <div class="form-group">
        <label for="">Menu (<?= $submenu['menu_id']; ?>)</label>
        <select class="form-control" id="menu_id" name="menu_id">
            <?php foreach ($menu as $m) : ?>
                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">URL</label>
        <input type="text" name="url" id="url" class="form-control" value="<?= $submenu['url']; ?>">
    </div>
    <div class="form-group">
        <label for="">Icon</label>
        <input type="text" name="icon" id="icon" class="form-control" value="<?= $submenu['icon']; ?>">
    </div>
    <div class="form-group">
        <label for="">Active</label>
        <select name="is_active" id="is_active" class="form-control">
            <option value="1">Active</option>
            <option value="0">Non Active</option>
        </select>
    </div>
    <input type="hidden" name="id" id="id" value="<?= $submenu['id']; ?>">
    <button type="submit" class="btn btn-primary float-right">Submit</input></button>
</form>
</div>