<?php 
if($name == "") {
	$name = "kecamatan_id" ;
}
if(count(Lokasi::model()->findByPk($kabkota_id)->children()->findAll()) > 0) {
$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => true,
		'name' => $name,
		'data'=>CHtml::listData(Lokasi::model()->findByPk($kabkota_id)->children()->findAll(), 'id', 'nama'),
		'options'=>array(
				'placeholder' => 'Pilih Kecamatan',
		),
		'htmlOptions'=>array(
				'prompt'=>'',
				'options'=>array($kecamatan_id=>array('selected'=>true))
		)
));
} else { 
?>
<span class="alert alert-error">Tidak ada data Kecamatan</span>
<?php } ?>
