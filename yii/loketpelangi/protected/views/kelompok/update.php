<?php
$this->breadcrumbs=array(
	'Kelompoks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kelompok','url'=>array('index')),
	array('label'=>'Create Kelompok','url'=>array('create')),
	array('label'=>'View Kelompok','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Kelompok','url'=>array('admin')),
);
?>

<h1>Update Kelompok <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>