<?php
/* @var $this DashboardController */

$this->breadcrumbs=array(
	'Dashboard',
);
?>
<?php 
$this->widget('bootstrap.widgets.TbBox', array(
		'title' => 'Dashboard',
		'headerIcon' => 'icon-home',
		'content' => $this->renderPartial('_menu',array(),true) 
))
?>