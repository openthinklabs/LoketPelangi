<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Loket'),
));

$this->menu=array(
	array('label'=>'Tambah Loket','url'=>array('create')),
	array('label'=>'Manage Loket','url'=>array('admin')),
);
?>

<h1>Loket</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
