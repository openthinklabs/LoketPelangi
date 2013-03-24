<?php
$this->breadcrumbs=array(
	'Jenis Bayars'=>array('index'),
	$model->kode_jenis_bayar,
);

$this->menu=array(
	array('label'=>'List JenisBayar','url'=>array('index')),
	array('label'=>'Create JenisBayar','url'=>array('create')),
	array('label'=>'Update JenisBayar','url'=>array('update','id'=>$model->kode_jenis_bayar)),
	array('label'=>'Delete JenisBayar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_jenis_bayar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisBayar','url'=>array('admin')),
);
?>

<h1>View JenisBayar #<?php echo $model->kode_jenis_bayar; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode_jenis_bayar',
		'keterangan',
	),
)); ?>
