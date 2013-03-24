<?php
$this->breadcrumbs=array(
	'Wilayahs'=>array('index'),
	$model->kode_pos=>array('view','id'=>$model->kode_pos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wilayah','url'=>array('index')),
	array('label'=>'Create Wilayah','url'=>array('create')),
	array('label'=>'View Wilayah','url'=>array('view','id'=>$model->kode_pos)),
	array('label'=>'Manage Wilayah','url'=>array('admin')),
);
?>

<h1>Update Wilayah <?php echo $model->kode_pos; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>