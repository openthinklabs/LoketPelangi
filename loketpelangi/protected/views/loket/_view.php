<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_loket')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_loket),array('view','id'=>$data->kode_loket)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jalan')); ?>:</b>
	<?php echo CHtml::encode($data->jalan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon2')); ?>:</b>
	<?php echo CHtml::encode($data->telepon2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kontak')); ?>:</b>
	<?php echo CHtml::encode($data->kontak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inactive')); ?>:</b>
	<?php echo CHtml::encode($data->inactive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negara_id')); ?>:</b>
	<?php echo CHtml::encode($data->negara_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propinsi_id')); ?>:</b>
	<?php echo CHtml::encode($data->propinsi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kabkota_id')); ?>:</b>
	<?php echo CHtml::encode($data->kabkota_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kecamatan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kecamatan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelurahan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kelurahan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rw_id')); ?>:</b>
	<?php echo CHtml::encode($data->rw_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rt_id')); ?>:</b>
	<?php echo CHtml::encode($data->rt_id); ?>
	<br />

	*/ ?>

</div>