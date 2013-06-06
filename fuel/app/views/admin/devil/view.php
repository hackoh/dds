<h2>Viewing #<?php echo $devil->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $devil->name; ?></p>
<p>
	<strong>Lv:</strong>
	<?php echo $devil->lv; ?></p>
<p>
	<strong>Hp:</strong>
	<?php echo $devil->hp; ?></p>
<p>
	<strong>Mp:</strong>
	<?php echo $devil->mp; ?></p>
<p>
	<strong>Power:</strong>
	<?php echo $devil->power; ?></p>
<p>
	<strong>Technique:</strong>
	<?php echo $devil->technique; ?></p>
<p>
	<strong>Magic:</strong>
	<?php echo $devil->magic; ?></p>
<p>
	<strong>Speed:</strong>
	<?php echo $devil->speed; ?></p>
<p>
	<strong>Luck:</strong>
	<?php echo $devil->luck; ?></p>
<p>
	<strong>Regist physical:</strong>
	<?php echo $devil->regist_physical; ?></p>
<p>
	<strong>Regist gun:</strong>
	<?php echo $devil->regist_gun; ?></p>
<p>
	<strong>Regist fire:</strong>
	<?php echo $devil->regist_fire; ?></p>
<p>
	<strong>Regist ice:</strong>
	<?php echo $devil->regist_ice; ?></p>
<p>
	<strong>Regist electric:</strong>
	<?php echo $devil->regist_electric; ?></p>
<p>
	<strong>Regist impact:</strong>
	<?php echo $devil->regist_impact; ?></p>
<p>
	<strong>Regist exorcism:</strong>
	<?php echo $devil->regist_exorcism; ?></p>
<p>
	<strong>Regist curse:</strong>
	<?php echo $devil->regist_curse; ?></p>
<p>
	<strong>Class id:</strong>
	<?php echo $devil->class_id; ?></p>

<?php echo Html::anchor('admin/devil/edit/'.$devil->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/devil', 'Back'); ?>