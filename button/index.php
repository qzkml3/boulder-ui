<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/boulder-ui/-/programs/common.php' ?>
<?php $_page_title = "Button"; ?>
<?php require_once _Comm::getProgramRoot() . '/layout-top.php' ?>
	<section class="b-item">
		<h1>Buttons</h1>
		<button type="button" class="b-btn">Click Me</button>
		<button type="button" class="b-btn-1">Click Me</button>
		<button type="button" class="b-btn-2">Click Me</button>
		<button type="button" class="b-btn-0">Click Me</button>
	</section>
	<section>
		<div class="b-item">
			<h1>b-btn</h1>
			<button type="button" class="b-btn">Click Me</button>
		</div>
	</section>
	<section>
		<div class="b-item">
			<h1>b-btn-1</h1>
			<p>Primary Button</p>
			<button type="button" class="b-btn-1">Click Me</button>
		</div>
	</section>
	<section>
		<div class="b-item">
			<h1>b-btn-2</h1>
			<p>Secondary Button</p>
			<button type="button" class="b-btn-2">Click Me</button>
		</div>
	</section>
	<section>
		<div class="b-item">
			<h1>b-btn-0</h1>
			<p>Danger Button</p>
			<button type="button" class="b-btn-0">Click Me</button>
		</div>
	</section>
<?php require_once _Comm::getProgramRoot() . '/layout-btm.php' ?>