<?php
$this->breadcrumbs=array(
	'Data Transaksi'=>array('index'),
	'Transaksi Baru',
);

$this->menu=array(
	array('label'=>'List Transaksi','url'=>array('index')),
	array('label'=>'Manage Transaksi','url'=>array('admin')),
);
?>

<h1>Transaksi Baru</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>