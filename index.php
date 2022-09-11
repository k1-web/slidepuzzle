<!DOCTYPE html>
<html lang="ja">
<head>
	<title>Slide Puzzle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/function.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php
	$row = 3;
	$col = 3;
?>
<div class="wrap">
	<h1 class="title">Slide Puzzle</h1>

	<?php $cnt_item = 1; ?>
	<?php $cnt_name = 1; ?>
	<?php for($r=1; $r<=($row*$col-1); $r++): ?>
		<?php for($i=1; $i<=$row; $i++): ?>
			<?php for($j=1; $j<=$col; $j++): ?>
				<input type="radio" name="r-<?= $r; ?>" id="i-<?= $r; ?>-<?= $i; ?>-<?= $j; ?>" class="row-<?= $i; ?> col-<?= $j; ?>"<?= ($r == $cnt_name && $r == $cnt_item)?' checked':''; ?>>
				<?php $cnt_item++; ?>
			<?php endfor; ?>
		<?php endfor; ?>
		<?php $cnt_item = 1; ?>
		<?php $cnt_name++; ?>
	<?php endfor; ?>

	<div class="board">
		<div class="grid">
		<?php for($r=1; $r<=($row*$col); $r++): ?>
			<div class="clm"></div>
		<?php endfor; ?>
		</div>
		<?php for($r=1; $r<=($row*$col-1); $r++): ?>
			<div class="labels labels-<?= $r; ?>">
			<?php for($i=1; $i<=$row; $i++): ?>
				<?php for($j=1; $j<=$col; $j++): ?>
					<label class="label label-<?= $i; ?>-<?= $j; ?>" for="i-<?= $r; ?>-<?= $i; ?>-<?= $j; ?>"><span class="num"><?= $r; ?></span></label>
				<?php endfor; ?>
			<?php endfor; ?>
			</div>
		<?php endfor; ?>
	</div>
</div>
</body>
</html>
