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
    $(function () {


    });

</script>
</body>
</html>