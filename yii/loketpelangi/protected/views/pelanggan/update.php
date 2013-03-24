<?php
$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	$model->kode_pelanggan=>array('view','id'=>$model->kode_pelanggan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pelanggan','url'=>array('index')),
	array('label'=>'Create Pelanggan','url'=>array('create')),
	array('label'=>'View Pelanggan','url'=>array('view','id'=>$model->kode_pelanggan)),
	array('label'=>'Manage Pelanggan','url'=>array('admin')),
);
?>

<h1>Update Pelanggan <?php echo $model->kode_pelanggan; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>