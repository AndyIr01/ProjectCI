<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<body>
	<section class="sec1">
		<div class="container">
			<h1 class="text-center">Welcome</h1>
			<a class="btn btn-primary" href="<?= base_url('Program/userLogin') ?>">Login</a>
		</div>
	</section>
</body>
</html>