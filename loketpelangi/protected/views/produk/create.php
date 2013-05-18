<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Produk'=>array('index'),
				'Create'),
));


$this->menu=array(
	array('label'=>'List Produk','url'=>array('index')),
	array('label'=>'Manage Produk','url'=>array('admin')),
);
?>

<h1>Create Produk</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>