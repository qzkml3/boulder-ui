<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/boulder-ui/-/programs/common.php' ?>
<?php $_page_title = "List"; ?>
<?php require_once _Comm::getProgramRoot() . '/layout-top.php' ?>
	<section>
		<h1>List</h1>
		<div class="b-item b-list">
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</div>
	</section>

	<section>
		<h1>Nasted List</h1>
		<div class="b-item b-list">
			<ul>
				<li>
					1
					<ul>
						<li>11</li>
						<li>12</li>
						<li>13</li>
					</ul>
				</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</div>
	</section>
<?php require_once _Comm::getProgramRoot() . '/layout-btm.php' ?>