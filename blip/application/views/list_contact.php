<div class="container-fluid">
    <h4>Messages From Customer</h4>


    <table id="table-invoice" class="table table_invoice table-bordered table-hover table-striped">
        <tr>
            <th>ID_Contact</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Message</th>
        </tr>

        <?php foreach ($contact as $cont) : ?>
            <tr>
                <td><?= $cont->id_contact; ?></td>
                <td><?= $cont->name; ?></td>
                <td><?= $cont->email; ?></td>
                <td><?= $cont->messages; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>