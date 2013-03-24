<?php
$this->breadcrumbs=array(
	'Kelompoks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kelompok','url'=>array('index')),
	array('label'=>'Manage Kelompok','url'=>array('admin')),
);
?>

<h1>Create Kelompok</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>