<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>
		array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Loket'=>array('index'),
				'Tambah'),
));


$this->menu=array(
	array('label'=>'List Loket','url'=>array('index')),
	array('label'=>'Manage Loket','url'=>array('admin')),
);
?>

<h1>Tambah Loket</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>