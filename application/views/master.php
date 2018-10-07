<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <base href="<?=base_url()?>">
	<title><?=isset($title) ? $title : '@App | Simple'?></title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/toastr.css">
    <style>
        .btn-xx {
            background: orange !important;
            width: 12px;
            height: 12px;
            position: relative;
            top: 7px;
            border-radius: 6px;
            left: -6px;
            box-shadow: cyan -2px 2px;
        }

    </style>
</head>
<body>

<div id="container">
	<?php $this->load->view($content); ?>
</div>

<script src="public/js/jquery-3.3.1.js"></script>
<script src="public/js/bootstrap.js"></script>
<script>
    //https://stackoverflow.com/questions/22207377/disable-click-outside-of-bootstrap-modal-area-to-close-modal
    // screen clock
    $(function () {
        $('#delete-confirm').on('show.bs.modal', function(e) {
            $(this).find('a.btn-delete-yes').attr('href', $(e.relatedTarget).data('href'));
        });

        $('#edit-confirm').on('show.bs.modal', function(e) {
            $(this).find('a.btn-update-yes').attr('href', $(e.relatedTarget).data('href'));
        });

    });

</script>
</body>
</html>