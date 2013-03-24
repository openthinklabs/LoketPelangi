<?php
$this->breadcrumbs=array(
	'Jenis Bayars'=>array('index'),
	$model->kode_jenis_bayar=>array('view','id'=>$model->kode_jenis_bayar),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisBayar','url'=>array('index')),
	array('label'=>'Create JenisBayar','url'=>array('create')),
	array('label'=>'View JenisBayar','url'=>array('view','id'=>$model->kode_jenis_bayar)),
	array('label'=>'Manage JenisBayar','url'=>array('admin')),
);
?>

<h1>Update JenisBayar <?php echo $model->kode_jenis_bayar; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>