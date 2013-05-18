<?php 
if($name == "") {
	$name = "kelurahan_id" ;
}
if(count(Lokasi::model()->findByPk($kecamatan_id)->children()->findAll()) > 0) {
$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => true,
		'name' => $name,
		'data'=>CHtml::listData(Lokasi::model()->findByPk($kecamatan_id)->children()->findAll(), 'id', 'nama'),
		'options'=>array(
				'placeholder' => 'Pilih Kelurahan',
		),
		'htmlOptions'=>array(
				'prompt'=>'',
				'options'=>array($kelurahan_id=>array('selected'=>true)),
		)
));
} else { 
?>
<span class="alert alert-error">Tidak ada data Kelurahan</span>
<?php } ?>
