<?php
$this->breadcrumbs=array(
	'Pelanggans',
);

$this->menu=array(
	array('label'=>'Create Pelanggan','url'=>array('create')),
	array('label'=>'Manage Pelanggan','url'=>array('admin')),
);
?>

<h1>Pelanggans</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
