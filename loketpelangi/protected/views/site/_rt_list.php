<?php 
if($name == "") {
	$name = "rt_id" ;
}
if(count(Lokasi::model()->findByPk($rw_id)->children()->findAll()) > 0) {
$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => true,
		'name' => $name,
		'data'=>CHtml::listData(Lokasi::model()->findByPk($rw_id)->children()->findAll(), 'id', 'nama'),
		'options'=>array(
				'placeholder' => 'Pilih RT',
		),
		'htmlOptions'=>array(
				'prompt'=>'',
				'options'=>array($rt_id=>array('selected'=>true))
		)
));
} else { 
?>
<span class="alert alert-error">Tidak ada data RT</span>
<?php } ?>
