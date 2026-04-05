<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/boulder-ui/-/programs/common.php' ?>
<?php $_page_title = "Table"; ?>
<?php require_once _Comm::getProgramRoot() . '/layout-top.php' ?>
	<section>
		<div class="b-tbl b-item">
			<h1>Basic table width</h1>
			<table>
				<thead>
				<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
				</tr>
				</thead>
				<tbody>
				<?php
				for ($i = 0; $i < 5; $i++) {
					?>
					<tr>
						<td>1</td>
						<td>2</td>
						<td>3</td>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</section>
	<section>
		<div class="b-tbl b-item">
			<h1>Fixed table width</h1>
			<table style="width: 4000px;">
				<thead>
				<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
				</tr>
				</thead>
				<tbody>
				<?php
				for ($i = 0; $i < 5; $i++) {
					?>
					<tr>
						<td>1</td>
						<td>2</td>
						<td>3</td>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</section>
	<section>
		<div class="b-tbl b-item">
			<h1>100% table width</h1>
			<table style="width: 100%;">
				<thead>
				<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
				</tr>
				</thead>
				<tbody>
				<?php
				for ($i = 0; $i < 5; $i++) {
					?>
					<tr>
						<td>1</td>
						<td>2</td>
						<td>3</td>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</section>
<?php require_once _Comm::getProgramRoot() . '/layout-btm.php' ?>