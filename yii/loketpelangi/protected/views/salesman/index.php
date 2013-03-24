<?php
$this->breadcrumbs=array(
	'Salesmen',
);

$this->menu=array(
	array('label'=>'Create Salesman','url'=>array('create')),
	array('label'=>'Manage Salesman','url'=>array('admin')),
);
?>

<h1>Salesmen</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
