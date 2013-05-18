<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Bidang Usaha'),
));


$this->menu=array(
	array('label'=>'Create BidangUsaha','url'=>array('create')),
	array('label'=>'Manage BidangUsaha','url'=>array('admin')),
);
?>

<h1>Bidang Usahas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
