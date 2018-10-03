<div class="row mt-2 justify-content-center">
    <div class="col-md-10">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">UserID</th>
                <th scope="col">Create Date</th>
                <th scope="col">Username</th>
                <th scope="col">Ship_at</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $order):?>
            <tr>
                <th scope="row"><?=$order['id']?></th>
                <td><?=$order['user_id']?></td>
                <td><?=$order['name']?></td>
                <td><?=$order['create_at']?></td>
                <td><?=$order['ship_at']?></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
<div class="row justify-content-center">
    <a class="btn btn-primary" href="<?=site_url(array('csv_learn','csv',123))?>" role="button">Csv</a>
</div>