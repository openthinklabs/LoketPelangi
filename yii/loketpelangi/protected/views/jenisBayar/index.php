<?php
$this->breadcrumbs=array(
	'Jenis Bayars',
);

$this->menu=array(
	array('label'=>'Create JenisBayar','url'=>array('create')),
	array('label'=>'Manage JenisBayar','url'=>array('admin')),
);
?>

<h1>Jenis Bayars</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
