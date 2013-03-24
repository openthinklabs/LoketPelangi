<?php
$this->breadcrumbs=array(
	'Status Pelanggans'=>array('index'),
	$model->kode_status_pelanggan,
);

$this->menu=array(
	array('label'=>'List StatusPelanggan','url'=>array('index')),
	array('label'=>'Create StatusPelanggan','url'=>array('create')),
	array('label'=>'Update StatusPelanggan','url'=>array('update','id'=>$model->kode_status_pelanggan)),
	array('label'=>'Delete StatusPelanggan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_status_pelanggan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StatusPelanggan','url'=>array('admin')),
);
?>

<h1>View StatusPelanggan #<?php echo $model->kode_status_pelanggan; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode_status_pelanggan',
		'keterangan',
	),
)); ?>
