<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_jenis_bayar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_jenis_bayar),array('view','id'=>$data->kode_jenis_bayar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>