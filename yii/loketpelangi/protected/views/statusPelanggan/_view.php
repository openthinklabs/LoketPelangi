<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_status_pelanggan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_status_pelanggan),array('view','id'=>$data->kode_status_pelanggan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>