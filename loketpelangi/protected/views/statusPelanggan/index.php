<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Status Pelanggan'),
));

$this->menu=array(
	array('label'=>'Create StatusPelanggan','url'=>array('create')),
	array('label'=>'Manage StatusPelanggan','url'=>array('admin')),
);
?>

<h1>Status Pelanggans</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
