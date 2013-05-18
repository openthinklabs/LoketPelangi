<?php
$this->breadcrumbs=array(
	'Transaksis',
);

$this->menu=array(
	array('label'=>'Create Transaksi','url'=>array('create')),
	array('label'=>'Manage Transaksi','url'=>array('admin')),
);
?>

<h1>Transaksis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
