<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <base href="<?=base_url()?>">
	<title><?=isset($title) ? $title : '@App | Simple'?></title>
    <link rel="stylesheet" href="public/bootstrap.css">
</head>
<body>

<div id="container">
	<?php $this->load->view($content); ?>
</div>
<script src="public/jquery.js"></script>
<script src="public/bootstrap.js"></script>
</body>
</html>