<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'transaksi-form',
	'htmlOptions'=>array('onsubmit'=>'return validate()'),	
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=> array('validateOnSubmit'=>true),
	//'focus'=>array($model,'tanggal'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'id',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->datePickerRow($model,'tanggal',array('class'=>'span2')); ?>

	<?php echo $form->textFieldRow($model, 'nama_anonim', array('class'=>'span3')); ?>
	<?php echo $form->hiddenField($pelanggan, 'kode_pelanggan'); ?>
	
	<div class="row-fluid">
	  <div class="span12">
	    <?php echo CHtml::Label('Detail Transaksi <span class="required">*</span>','detail_transaksi');?>
	    <?php $this->renderPartial("_form_detail",array("model"=>$model));?>
	  </div>
	</div>

	<div class="row-fluid">
	 <div class="span12">
	  <div class="form-actions">
	   <div class="pull-right">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
		</div>
	  </div>
	 </div>
	</div>

<?php $this->endWidget(); ?>

<?php 
  Yii::app()->clientScript->registerScript('transaksi',"
		  $('body').on('keyup','#qty', function(){ 
		     var total = parseFloat($('#qty').val())*parseFloat($('#harga').val());
		     $('#total').val(total);
          }) ;
		  $('body').on('keyup','#harga', function(){ 
		     var total = parseFloat($('#qty').val())*parseFloat($('#harga').val());
		     $('#total').val(total);
          }) ;
		  $('body').on('click','[name=hapus]', function(){
		      if(confirm('Anda yakin ingin menghapus data ini ?')) { 
		         $(this).parent().parent().remove();
		         hitungTotal('delete') ;
		      }
          }) ;					
		
		  $('[name=tambah_detail_transaksi]').unbind('click').bind('click', function(){
		    var kode_produk = $('#kode_produk').select2('val') ;
		    var nama_produk = $('#kode_produk').select2('data').text ;
		    var qty         = parseFloat($('#qty').val());
		    var harga       = parseFloat($('#harga').val());
		    var total       = parseFloat($('#total').val());
		
		    hitungTotal('') ;

		    var kode_produk_html  = '<span class=\'uneditable-input kode_produk\' style=text-align:right>'+nama_produk+'</span><input type=hidden name=kode_produk_arr['+kode_produk+'][] value='+kode_produk+'></input>' ;
		    var qty_html          = '<span class=\'uneditable-input qty\' style=text-align:right>'+qty+'</span><input type=hidden name=qty_arr['+kode_produk+'][] value='+qty+'></input>' ;
		    var harga_html        = '<span class=\'uneditable-input harga\' style=text-align:right>'+harga+'</span><input type=hidden name=harga_arr['+kode_produk+'][] value='+harga+'></input>' ;
		    var total_html        = '<span class=\'uneditable-input total\' style=text-align:right>'+total+'</span><input type=hidden name=total_arr['+kode_produk+'][] value='+total+'></input>' ;
		    var hapus_html        = '<button type=button name=hapus id='+kode_produk+' class=btn><i class=icon-remove></i></button>' ;
				
		    $('#tabel_transaksi_detail > tbody:last').append('<tr><td>'+kode_produk_html+'</td><td>'+qty_html+'</td><td>'+harga_html+'</td><td>'+total_html+'</td><td>'+hapus_html+'</td></tr>');
          }) ;
		
		  function hitungTotal(act) {
		    var total_qty   = parseFloat($('#qty').val()) ;
		    var total_sum   = parseFloat($('#total').val());
		    var i           = 0 ;
		
		    if(act == 'delete') {
		       total_qty = 0 ;
		       total_sum = 0 ;
		    }
		
				 
		    $('.kode_produk').each(function(){ 
		       i++ ;
            }) ;
		
		    $('.qty').each(function(){ 
		       total_qty += parseFloat($(this).html());
            }) ;

		    $('.total').each(function(){ 
		       total_sum +=  parseFloat($(this).html());
            }) ;				
		  
		    $('#total_qty').html(total_qty);
		    $('#total_sum').html(total_sum);		
		  }
		") ;
?> 

<script>
function validate() { 
    var total_qty   = parseFloat($('#total_qty').html()) ;
    var total_sum   = parseFloat($('#total_sum').html());

    if((total_qty + total_sum) == 0) {
        alert("Total transaksi tidak boleh nol");
        return false ;
    }
    
    return true;
   } 
</script>
