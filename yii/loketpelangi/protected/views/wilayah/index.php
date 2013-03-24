<?php
$this->breadcrumbs=array(
	'Wilayahs',
);

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
