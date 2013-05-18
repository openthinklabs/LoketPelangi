<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Kode Pos'),
));


$this->menu=array(
	array('label'=>'Create Wilayah','url'=>array('create')),
	array('label'=>'Manage Wilayah','url'=>array('admin')),
);
?>

<h1>Wilayahs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
