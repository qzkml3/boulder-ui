<!DOCTYPE html>
<html lang="ko">

<head>
	<title><?php echo _Comm::getHeadTitle(); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/boulder-ui/-/styles/common.css" rel="stylesheet">
	<script src="/boulder-ui/-/scripts/comm.js"></script>
	<?= $_html_ext ?? ''; ?>
</head>

<body>
	<header class="b-item">
		<?php
		$familys = [
			['name' => 'Boulder Home', 'url' => '/home'],
			['name' => 'Boulder UI', 'url' => '/boulder-ui'],
		];

		foreach ($familys as $key => $family) {
			echo "<a href='{$family['url']}'>{$family['name']}</a>";
			for ($i = 0; $i < 6; $i++) {
				echo "&nbsp;";
			}
		}
		?>
	</header>

	<main>
		<h1><?=$_page_title ?? ""?></h1>