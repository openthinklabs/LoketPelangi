<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'), 
		'Transaksi'),
));

$this->menu=array(
	array('label'=>'Create Transaksi','url'=>array('create')),
	array('label'=>'Manage Transaksi','url'=>array('admin')),
);
?>

<h1>Transaksi</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
