<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'), 
		'Pelanggan'),
));

$this->menu=array(
	array('label'=>'Create Pelanggan','url'=>array('create')),
	array('label'=>'Manage Pelanggan','url'=>array('admin')),
);
?>

<h1>Pelanggan</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
