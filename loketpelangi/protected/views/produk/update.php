<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Produk'=>array('index'),
				$model->kode_produk=>array('view','id'=>$model->kode_produk),
				'Update'),
));


$this->menu=array(
	array('label'=>'List Produk','url'=>array('index')),
	array('label'=>'Create Produk','url'=>array('create')),
	array('label'=>'View Produk','url'=>array('view','id'=>$model->kode_produk)),
	array('label'=>'Manage Produk','url'=>array('admin')),
);
?>

<h1>Update Produk <?php echo $model->kode_produk; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>