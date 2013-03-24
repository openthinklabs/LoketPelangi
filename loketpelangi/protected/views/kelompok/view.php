<?php
$this->breadcrumbs=array(
	'Kelompoks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kelompok','url'=>array('index')),
	array('label'=>'Create Kelompok','url'=>array('create')),
	array('label'=>'Update Kelompok','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Kelompok','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kelompok','url'=>array('admin')),
);
?>

<h1>View Kelompok #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'keterangan',
	),
)); ?>
