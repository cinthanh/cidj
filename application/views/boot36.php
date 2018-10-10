<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@ggg</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--https://stackoverflow.com/questions/8057565/mysql-update-statement-inner-join-tables/8057585-->
</head>
<body>
<div class="list-group" style="width: 50%">
    <span href="#" class="list-group-item active">
        View detail
    </span>
    <span class="list-group-item"><b style="min-width: 200px;display: inline-block">System_type :</b> ac facilisis in</span>
    <span class="list-group-item"><b style="min-width: 200px;display: inline-block">Name :</b> Morbi leo risus</span>
    <span class="list-group-item"><b style="min-width: 200px;display: inline-block">Code :</b> Porta ac consectetur ac</span>
    <span class="list-group-item"><b style="min-width: 200px;display: inline-block">Column name :</b> Vestibulum at eros</span>
    <span class="list-group-item"><b style="min-width: 200px;display: inline-block">Last account update :</b> Vestibulum at eros</span>
</div>
<hr>
<?=form_open()?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="formGroupExampleInput">System_type</label>
                <input value="<?=isset($data['sys_name']) ?$data['sys_name'] : set_value('sys_name')?>" type="text" name="sys_name" class="form-control" id="formGroupExampleInput">
                <span class="text-danger"><?php echo form_error('sys_name'); ?></span>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Name</label>
                <input type="text" name="sys_detail_name" class="form-control" id="formGroupExampleInput2">
                <span class="text-danger"><?php echo form_error('sys_detail_name'); ?></span>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Code</label>
                <input type="text" name="code1" class="form-control" id="formGroupExampleInput3">
                <span class="text-danger"><?php echo form_error('code1'); ?></span>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput4">column name</label>
                <input type="text" name="column_name" class="form-control" id="formGroupExampleInput4">
                <span class="text-danger"><?php echo form_error('column_name'); ?></span>
            </div>
            <input type="submit" name="update" class="form-control btn btn-success" value="Update">
        </div>
        <div class="col-md-2"></div>
    </div>

</form>
<a href="<?= base_url('files/process_code/'). "edit/123" ?>" class="btn btn-danger">Edit</a>
<a href="<?= base_url('files/show_detail/'). "9999" ?>" class="btn btn-success">Back</a>

</body>
</html>


