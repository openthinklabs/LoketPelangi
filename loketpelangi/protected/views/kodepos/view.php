<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Kode Pos'=>array('index'),
				$model->kode_pos,),
));

$this->menu=array(
	array('label'=>'List Wilayah','url'=>array('index')),
	array('label'=>'Create Wilayah','url'=>array('create')),
	array('label'=>'Update Wilayah','url'=>array('update','id'=>$model->kode_pos)),
	array('label'=>'Delete Wilayah','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_pos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wilayah','url'=>array('admin')),
);
?>

<h1>View Wilayah #<?php echo $model->kode_pos; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode_pos',
		'keterangan',
		'latitude',
		'longitude',
		'transfer',
	),
)); ?>
