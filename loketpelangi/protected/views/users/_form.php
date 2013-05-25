<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'id'); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>50)); ?>
	
	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>200)); ?>	

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'nama_lengkap',array('class'=>'span5','maxlength'=>200)); ?>


    <?php echo CHtml::activeLabelEx($model,'kode_loket');?>
	<?php 
	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Users[kode_loket]',
			'data'=>CHtml::listData(Loket::model()->findAll(), 'kode_loket', 'kode_loket'),
			'options'=>array(
					'placeholder' => 'Pilih Loket',
			),
			'htmlOptions'=>array(
					'prompt'=>'',
					'options'=>array($model->kode_loket=>array('selected'=>true))
			)
	));
	?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
