<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/boulder-ui/-/programs/common.php' ?>
<?php $_page_title = "Form"; ?>
<?php require_once _Comm::getProgramRoot() . '/layout-top.php' ?>
	<section>
		<h1>fields</h1>
		<form class="b-item b-form">
			<input type="text">
			<input type="password">
			<input type="number">
			<input type="date">
			<input type="datetime-local">
			<input type="button"></form>
	</section>
<?php require_once _Comm::getProgramRoot() . '/layout-btm.php' ?>