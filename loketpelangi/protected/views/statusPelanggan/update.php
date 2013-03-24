<?php
$this->breadcrumbs=array(
	'Status Pelanggans'=>array('index'),
	$model->kode_status_pelanggan=>array('view','id'=>$model->kode_status_pelanggan),
	'Update',
);

$this->menu=array(
	array('label'=>'List StatusPelanggan','url'=>array('index')),
	array('label'=>'Create StatusPelanggan','url'=>array('create')),
	array('label'=>'View StatusPelanggan','url'=>array('view','id'=>$model->kode_status_pelanggan)),
	array('label'=>'Manage StatusPelanggan','url'=>array('admin')),
);
?>

<h1>Update StatusPelanggan <?php echo $model->kode_status_pelanggan; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>