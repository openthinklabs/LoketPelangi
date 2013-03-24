<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'bidang-usaha-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'kode_usaha',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'keterangan',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'detail',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'transfer',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
