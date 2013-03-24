<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_usaha')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_usaha),array('view','id'=>$data->kode_usaha)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer')); ?>:</b>
	<?php echo CHtml::encode($data->transfer); ?>
	<br />


</div>