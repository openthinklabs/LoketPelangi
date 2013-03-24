<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>
		array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
		'Pelanggan'=>array('index'),
		'Tambah'),
));


$this->menu=array(
	array('label'=>'Daftar Pelanggan','url'=>array('index')),
	array('label'=>'Manage Pelanggan','url'=>array('admin')),
);
?>

<h1>Tambah Pelanggan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>