<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Status Pelanggan'=>array('index'),
				'Create'),
));


$this->menu=array(
	array('label'=>'List StatusPelanggan','url'=>array('index')),
	array('label'=>'Manage StatusPelanggan','url'=>array('admin')),
);
?>

<h1>Create StatusPelanggan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>