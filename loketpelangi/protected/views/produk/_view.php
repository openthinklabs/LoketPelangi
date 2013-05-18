<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_produk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_produk),array('view','id'=>$data->kode_produk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>