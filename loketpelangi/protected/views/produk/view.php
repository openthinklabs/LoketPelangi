<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Produk'=>array('index'),
				$model->kode_produk,),
));


$this->menu=array(
	array('label'=>'List Produk','url'=>array('index')),
	array('label'=>'Create Produk','url'=>array('create')),
	array('label'=>'Update Produk','url'=>array('update','id'=>$model->kode_produk)),
	array('label'=>'Delete Produk','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_produk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Produk','url'=>array('admin')),
);
?>

<h1>View Produk #<?php echo $model->kode_produk; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode_produk',
		'nama',
		'keterangan',
	),
)); ?>
