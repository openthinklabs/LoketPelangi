<?php
/* @var $this DivisiController */
/* @var $model Divisi */

$this->breadcrumbs=array(
	'Divisis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Divisi', 'url'=>array('index')),
	array('label'=>'Manage Divisi', 'url'=>array('admin')),
);
?>

<h1>Create Divisi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>