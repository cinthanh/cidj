<div class="row">
    <div class="col-sm-5">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <h2>Lorem Files</h2>
                <div class="alert alert-danger">
                    <?=$this->session->flashdata('error_link')?>
                </div>
                <?=form_open_multipart()?>
                <div class="form-group">
                    <input class="form-control" type="file" name="up_file">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary form-control" type="submit" name="btn_up_file" value="Go">
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
    <div class="col-sm-7"><a href="<?= base_url('files/process_code/'). "ass/123" ?>" class="btn btn-danger">Action</a></div>
    <div class="col-sm-7"><a href="<?= base_url('files/show_detail/'). "9999" ?>" class="btn btn-success">View by id</a></div>
</div>