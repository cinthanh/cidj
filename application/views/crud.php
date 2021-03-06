<div class="row mt-2 justify-content-center">
    <div class="col-md-10">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ProductID</th>
                <th scope="col" style="width: 20%">Url</th>
                <th scope="col" style="width: 20%">Alt</th>
                <th scope="col">Order</th>
                <th scope="col">Active</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">sss</th>
                    <td>assas</td>
                    <td>errer</td>
                    <td>iooi</td>
                    <td>pppp</td>
                    <td>qqqqq</td>
                    <td>
                        <a class="btn btn-dark" href="phps.php" target="_blank">Test</a><!--data-href=data-from-mysql-->
                        <a data-target="#edit-confirm" data-href="/edit.php?id=23" class="btn btn-warning" href="#" data-backdrop="static" data-keyboard="false" data-toggle="modal">Edit</a>
                        <a data-target="#delete-confirm"  data-href="/delete.php?id=23" class="btn btn-danger" href="#" data-toggle="modal">Delete</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="row justify-content-center">
    <a class="btn btn-success mr-2" href="#" role="button">Show more</a>
    <a class="btn btn-info" href="#" role="button">GoToHome</a>
</div>


<!-- Modal Edit-->
<div class="modal fade" id="edit-confirm" tabindex="-1" role="dialog" aria-labelledby="edit-confirm" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Edit Info</h5>
                <button type="button" class="close btn-xx" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="position: absolute;top: 7px; left: 9px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary btn-update-yes">Update me</a>
            </div>
        </div>
    </div>
</div>


<!--Delete Modal-->
<!-- Modal -->
<div class="modal fade" id="delete-confirm" tabindex="-1" role="dialog" aria-labelledby="delete-confirm" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="close btn-xx" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="position: absolute;top: 7px; left: 9px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure delete it ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="btn-delete-yes" class="btn btn-danger btn-outline-danger btn-delete-yes">Delete</a>
            </div>
        </div>
    </div>
</div>

