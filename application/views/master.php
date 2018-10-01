<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=isset($title) ? $title : '@App | Simple'?></title>
</head>
<body>

<div id="container">
	<?php $this->load->view($content); ?>
</div>

</body>
</html>