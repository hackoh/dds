<h2>Listing Devils</h2>
<br>
<?php if ($devils): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Lv</th>
			<th>Hp</th>
			<th>Mp</th>
			<th>Power</th>
			<th>Technique</th>
			<th>Magic</th>
			<th>Speed</th>
			<th>Luck</th>
			<th>Regist physical</th>
			<th>Regist gun</th>
			<th>Regist fire</th>
			<th>Regist ice</th>
			<th>Regist electric</th>
			<th>Regist impact</th>
			<th>Regist exorcism</th>
			<th>Regist curse</th>
			<th>Class id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($devils as $devil): ?>		<tr>

			<td><?php echo $devil->name; ?></td>
			<td><?php echo $devil->lv; ?></td>
			<td><?php echo $devil->hp; ?></td>
			<td><?php echo $devil->mp; ?></td>
			<td><?php echo $devil->power; ?></td>
			<td><?php echo $devil->technique; ?></td>
			<td><?php echo $devil->magic; ?></td>
			<td><?php echo $devil->speed; ?></td>
			<td><?php echo $devil->luck; ?></td>
			<td><?php echo $devil->regist_physical; ?></td>
			<td><?php echo $devil->regist_gun; ?></td>
			<td><?php echo $devil->regist_fire; ?></td>
			<td><?php echo $devil->regist_ice; ?></td>
			<td><?php echo $devil->regist_electric; ?></td>
			<td><?php echo $devil->regist_impact; ?></td>
			<td><?php echo $devil->regist_exorcism; ?></td>
			<td><?php echo $devil->regist_curse; ?></td>
			<td><?php echo $devil->class_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/devil/view/'.$devil->id, 'View'); ?> |
				<?php echo Html::anchor('admin/devil/edit/'.$devil->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/devil/delete/'.$devil->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Devils.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/devil/create', 'Add new Devil', array('class' => 'btn btn-success')); ?>

</p>
