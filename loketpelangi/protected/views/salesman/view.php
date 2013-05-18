<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
					'Salesmen'=>array('index'),
				     $model->kode_salesman,),
));


$this->menu=array(
	array('label'=>'List Salesman','url'=>array('index')),
	array('label'=>'Create Salesman','url'=>array('create')),
	array('label'=>'Update Salesman','url'=>array('update','id'=>$model->kode_salesman)),
	array('label'=>'Delete Salesman','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_salesman),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salesman','url'=>array('admin')),
);
?>

<h1>View Salesman #<?php echo $model->kode_salesman; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode_salesman',
		'kode_loket',
		'nama',
		'transfer',
		'alamat',
		'status',
	),
)); ?>
