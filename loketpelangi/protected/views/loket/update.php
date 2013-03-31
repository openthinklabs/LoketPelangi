<?php
$this->breadcrumbs=array(
	'Lokets'=>array('index'),
	$model->kode_loket=>array('view','id'=>$model->kode_loket),
	'Update',
);

$this->menu=array(
	array('label'=>'List Loket','url'=>array('index')),
	array('label'=>'Create Loket','url'=>array('create')),
	array('label'=>'View Loket','url'=>array('view','id'=>$model->kode_loket)),
	array('label'=>'Manage Loket','url'=>array('admin')),
);
?>

<h1>Update Loket <?php echo $model->kode_loket; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>