<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo base_url('asset/images/favicon.png');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/images/reset.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/images/style.css');?>" />
	<title>Error 404: Halaman tidak ditemukan.</title>
</head>
<body>
<div id="masthead">
	<?php $this->load->view('masthead'); ?>
</div>
<div id="main">
	<h2 id="error_header" class="error_header">Error 404</h2>
	<p class="error_content">Halaman tidak ditemukan.</p><br>
	<?php echo 'Kembali ke ' . anchor(base_url(), 'halaman utama'); ?>
</div>
<div id="footer">
	<?php $this->load->view('footer'); ?>
</div>
</body>
</html>