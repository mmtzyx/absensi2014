<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="shortcut icon" href="<?php echo base_url('asset/images/favicon.png');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/images/reset.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/images/style.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/images/calendar.css');?>" />
	<script type="text/javascript" src="<?php echo base_url('asset/js/calendar.js'); ?>" ></script>
	<title><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></title>
</head>
<body id="<?php echo isset($modul) ? $modul : ''; ?>">
	<div id="masthead">
		<?php $this->load->view('masthead'); ?>
	</div>
	<div id="navigation">
		<?php $this->load->view('navigation'); ?>
	</div>
	<div id="main">
		<?php $this->load->view($main_view); ?>
	</div>
	<div id="footer">
		<?php $this->load->view('footer'); ?>
	</div>
</body>
</html>