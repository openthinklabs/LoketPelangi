<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Salesman'),
));

$this->menu=array(
	array('label'=>'Create Salesman','url'=>array('create')),
	array('label'=>'Manage Salesman','url'=>array('admin')),
);
?>

<h1>Salesman</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
