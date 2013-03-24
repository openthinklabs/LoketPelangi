<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'kode_pelanggan',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'kode_salesman',array('class'=>'span5','maxlength'=>9)); ?>

	<?php echo $form->textFieldRow($model,'kode_loket',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'kode_usaha',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'kode_pos',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'lokasi_id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'nama_singkat',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'alamat_tagih',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'dtgl_masuk',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'attn',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'telepon',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'npwp',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'term',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'takakura_pinjaman',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'takakura_uang_jaminan',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'tong_sampah_pinjaman',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tong_sampah_uang_jaminan',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'telepon2',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'transfer',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'cetak_harga',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'pembayaran',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
