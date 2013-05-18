<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Produk'),
));

$this->menu=array(
	array('label'=>'Create Produk','url'=>array('create')),
	array('label'=>'Manage Produk','url'=>array('admin')),
);
?>

<h1>Produks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
