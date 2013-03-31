<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'kode_loket',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'keterangan',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'jalan',array('class'=>'span5','maxlength'=>510)); ?>

	<?php echo $form->textFieldRow($model,'telepon',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'telepon2',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'fax',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'kontak',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'inactive',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'negara_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'propinsi_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kabkota_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kecamatan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kelurahan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rw_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rt_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
