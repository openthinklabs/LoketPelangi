<?php 
if(count(Lokasi::model()->findByPk($kelurahan_id)->children()->findAll()) > 0) {
$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => true,
		'name' => 'rw_id',
		'data'=>CHtml::listData(Lokasi::model()->findByPk($kelurahan_id)->children()->findAll(), 'id', 'nama'),
		'options'=>array(
				'placeholder' => 'Pilih RW',
		),
		'htmlOptions'=>array(
				'prompt'=>'',
				'options'=>array($rw_id=>array('selected'=>true))
		)
));
} else { 
?>
<span class="alert alert-error">Tidak ada data RW</span>
<?php } ?>
