<?php
/* @var $this DivisiController */
/* @var $model Divisi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'divisi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_divisi'); ?>
		<?php echo $form->textField($model,'kode_divisi',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'kode_divisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textField($model,'detail',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transfer'); ?>
		<?php echo $form->textField($model,'transfer',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'transfer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->