<?php
$this->breadcrumbs=array(
	'Bidang Usahas',
);

$this->menu=array(
	array('label'=>'Create BidangUsaha','url'=>array('create')),
	array('label'=>'Manage BidangUsaha','url'=>array('admin')),
);
?>

<h1>Bidang Usahas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
