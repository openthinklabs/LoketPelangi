<?php
$this->breadcrumbs=array(
	'Kelompoks',
);

$this->menu=array(
	array('label'=>'Create Kelompok','url'=>array('create')),
	array('label'=>'Manage Kelompok','url'=>array('admin')),
);
?>

<h1>Kelompoks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
