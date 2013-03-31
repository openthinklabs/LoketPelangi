<?php
$this->breadcrumbs=array(
	'Lokets'=>array('index'),
	$model->kode_loket,
);

$this->menu=array(
	array('label'=>'List Loket','url'=>array('index')),
	array('label'=>'Create Loket','url'=>array('create')),
	array('label'=>'Update Loket','url'=>array('update','id'=>$model->kode_loket)),
	array('label'=>'Delete Loket','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_loket),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Loket','url'=>array('admin')),
);
?>

<h1>View Loket #<?php echo $model->kode_loket; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode_loket',
		'keterangan',
		'jalan',
		'telepon',
		'telepon2',
		'fax',
		'email',
		'kontak',
		'inactive',
		'negara_id',
		'propinsi_id',
		'kabkota_id',
		'kecamatan_id',
		'kelurahan_id',
		'rw_id',
		'rt_id',
	),
)); ?>
