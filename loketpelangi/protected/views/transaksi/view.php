<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Transaksi'=>array('index')),
));

$this->menu=array(
	array('label'=>'Daftar Transaksi','url'=>array('index')),
	array('label'=>'Tambah Transaksi','url'=>array('create')),
	array('label'=>'Update Transaksi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Hapus Transaksi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaksi','url'=>array('admin')),
);
?>

<h1>View Transaksi #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tanggal',
		'kode_pelanggan',
	),
)); ?>
