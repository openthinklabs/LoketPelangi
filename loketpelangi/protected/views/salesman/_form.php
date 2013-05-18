<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'salesman-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'focus'=>array($model,'nama'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'kode_salesman',array('class'=>'span5','maxlength'=>9)); ?>

    <?php echo CHtml::activeLabelEx($model,'kode_loket');?>
	<?php 
	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Salesman[kode_loket]',
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

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'transfer',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
