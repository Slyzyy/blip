<div class="info">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-3">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin/role_update'); ?>" method="post">
                <input type="hidden" name="id" value="<?= $role->id ?>">
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?= $role->role ?>">
                    <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary m-0">Save Change</button>
                    <a href="<?= base_url('admin/role'); ?>">
                        <div class="btn btn-danger m-0">Cancel</</a> </div> </div> </form> </div> </div> </div> </div>