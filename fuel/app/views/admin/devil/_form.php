<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>

			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($devil) ? $devil->name : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Lv', 'lv'); ?>

			<div class="input">
				<?php echo Form::input('lv', Input::post('lv', isset($devil) ? $devil->lv : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Hp', 'hp'); ?>

			<div class="input">
				<?php echo Form::input('hp', Input::post('hp', isset($devil) ? $devil->hp : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Mp', 'mp'); ?>

			<div class="input">
				<?php echo Form::input('mp', Input::post('mp', isset($devil) ? $devil->mp : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Power', 'power'); ?>

			<div class="input">
				<?php echo Form::input('power', Input::post('power', isset($devil) ? $devil->power : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Technique', 'technique'); ?>

			<div class="input">
				<?php echo Form::input('technique', Input::post('technique', isset($devil) ? $devil->technique : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Magic', 'magic'); ?>

			<div class="input">
				<?php echo Form::input('magic', Input::post('magic', isset($devil) ? $devil->magic : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Speed', 'speed'); ?>

			<div class="input">
				<?php echo Form::input('speed', Input::post('speed', isset($devil) ? $devil->speed : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Luck', 'luck'); ?>

			<div class="input">
				<?php echo Form::input('luck', Input::post('luck', isset($devil) ? $devil->luck : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist physical', 'regist_physical'); ?>

			<div class="input">
				<?php echo Form::input('regist_physical', Input::post('regist_physical', isset($devil) ? $devil->regist_physical : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist gun', 'regist_gun'); ?>

			<div class="input">
				<?php echo Form::input('regist_gun', Input::post('regist_gun', isset($devil) ? $devil->regist_gun : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist fire', 'regist_fire'); ?>

			<div class="input">
				<?php echo Form::input('regist_fire', Input::post('regist_fire', isset($devil) ? $devil->regist_fire : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist ice', 'regist_ice'); ?>

			<div class="input">
				<?php echo Form::input('regist_ice', Input::post('regist_ice', isset($devil) ? $devil->regist_ice : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist electric', 'regist_electric'); ?>

			<div class="input">
				<?php echo Form::input('regist_electric', Input::post('regist_electric', isset($devil) ? $devil->regist_electric : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist impact', 'regist_impact'); ?>

			<div class="input">
				<?php echo Form::input('regist_impact', Input::post('regist_impact', isset($devil) ? $devil->regist_impact : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist exorcism', 'regist_exorcism'); ?>

			<div class="input">
				<?php echo Form::input('regist_exorcism', Input::post('regist_exorcism', isset($devil) ? $devil->regist_exorcism : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Regist curse', 'regist_curse'); ?>

			<div class="input">
				<?php echo Form::input('regist_curse', Input::post('regist_curse', isset($devil) ? $devil->regist_curse : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Class id', 'class_id'); ?>

			<div class="input">
				<?php echo Form::input('class_id', Input::post('class_id', isset($devil) ? $devil->class_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>