<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_salesman')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_salesman),array('view','id'=>$data->kode_salesman)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_loket')); ?>:</b>
	<?php echo CHtml::encode($data->kode_loket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer')); ?>:</b>
	<?php echo CHtml::encode($data->transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>