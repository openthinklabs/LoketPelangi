<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'produk-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'keterangan',array('class'=>'span5','maxlength'=>255)); ?>
	
    <?php echo CHtml::activeLabelEx($model,'kode_divisi');?>
	<?php 
	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Produk[kode_divisi]',
			'data'=>CHtml::listData(Divisi::model()->findAll(), 'kode_divisi', 'keterangan'),
			'options'=>array(
					'placeholder' => 'Pilih Divisi',
			),
			'htmlOptions'=>array(
					'prompt'=>'',
					'options'=>array($model->kode_divisi=>array('selected'=>true))
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
