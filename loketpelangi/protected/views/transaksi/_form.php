<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'transaksi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'id',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->datePickerRow($model,'tanggal',array('class'=>'span2')); ?>

	<?php echo CHtml::activeLabelEx($model, 'kode_pelanggan')?>
	<?php 
	$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => false,
		'name' => 'kode_pelanggan',
		'model'=>$model,	
		'options' => array(
			'width' => '40%',
			'minimumInputLength' => 2,
			'placeholder' => 'Pilih Pelanggan',
			'allowClear'=>true,
			'ajax' =>array( 
        			'url'=>Yii::app()->createUrl('/pelanggan/jsonp'),
        			'dataType'=>'json',
        			'data'=> 'js:function (term, page) {
            			return {
                			q: term, 
                			page_limit: 10,
					        page:page,
            			};
        			}',
        			'results'=> 'js:function (data, page) { 		
            			return {results: data};
        			}'
    		),
	)));	
	?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
