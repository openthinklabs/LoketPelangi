<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
					'Salesmen'=>array('index'),
				     $model->kode_salesman=>array('view','id'=>$model->kode_salesman),
				     'Update'),
));


$this->menu=array(
	array('label'=>'List Salesman','url'=>array('index')),
	array('label'=>'Create Salesman','url'=>array('create')),
	array('label'=>'View Salesman','url'=>array('view','id'=>$model->kode_salesman)),
	array('label'=>'Manage Salesman','url'=>array('admin')),
);
?>

<h1>Update Salesman <?php echo $model->kode_salesman; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>