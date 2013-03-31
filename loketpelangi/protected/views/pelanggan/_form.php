<?php 
  Yii::app()->clientScript->registerScript('lokasi'," 
  		$('#negara_id').unbind('change').bind('change', function(){ 
  		  var negara_id = $(this).select2('val');
  		  $.get('".Yii::app()->createUrl('site/renderPropinsiList')."',{negara_id:negara_id},function(data){
  		  		$('#propinsi_list').html(data);
  		  		$('#propinsi_id').select2({ 
  		  		  placeholder: 'Pilih Propinsi',    
                });
  		  		$('#kabkota_list, #kecamatan_list, #kelurahan_id, #rw_list, #rt_list').html('<span class=uneditable-input>-</span>');
          })
        }) ;
  		  		
  	    $('body').on('change','#propinsi_id',function(){ 
  		  	var propinsi_id = $(this).select2('val');
  		    $.get('".Yii::app()->createUrl('site/renderKabupatenKotaList')."',{propinsi_id:propinsi_id},function(data){
  		  		$('#kabkota_list').html(data);
  		  		$('#kabkota_id').select2({ 
  		  		  placeholder: 'Pilih Kabupaten/Kota',    
                });
  		        $('#kecamatan_list, #kelurahan_list, #rw_list, #rt_list').html('<span class=uneditable-input>-</span>');
            })
        }) ;
  		    		
  	    $('body').on('change','#kabkota_id',function(){ 
  		  	var kabkota_id = $(this).select2('val');
  		    $.get('".Yii::app()->createUrl('site/renderKecamatanList')."',{kabkota_id:kabkota_id},function(data){
  		  		$('#kecamatan_list').html(data);
  		  		$('#kecamatan_id').select2({ 
  		  		  placeholder: 'Pilih Kecamatan',    
                });
  		        $('#kelurahan_list, #rw_list, #rt_list').html('<span class=uneditable-input>-</span>');
            })
        }) ;  		    		
  		    		
  	    $('body').on('change','#kecamatan_id',function(){ 
  		  	var kecamatan_id = $(this).select2('val');
  		    $.get('".Yii::app()->createUrl('site/renderKelurahanList')."',{kecamatan_id:kecamatan_id},function(data){
  		  		$('#kelurahan_list').html(data);
  		  		$('#kelurahan_id').select2({ 
  		  		  placeholder: 'Pilih Kelurahan',    
                });
  		    	$('#rw_list, #rt_list').html('<span class=uneditable-input>-</span>');
            })
        }) ;  		    		  		    		
  		    		
  	    $('body').on('change','#kelurahan_id',function(){ 
  		  	var kelurahan_id = $(this).select2('val');
  		    $.get('".Yii::app()->createUrl('site/renderRwList')."',{kelurahan_id:kelurahan_id},function(data){
  		  		$('#rw_list').html(data);
  		  		$('#rw_id').select2({ 
  		  		  placeholder: 'Pilih RW',    
                });
  		    	$('#rt_list').html('<span class=uneditable-input>-</span>');
            })
        }) ;  		    		  		    		  		    		
  		    		
  	    $('body').on('change','#rw_id',function(){ 
  		  	var rw_id = $(this).select2('val');
  		    $.get('".Yii::app()->createUrl('site/renderRtList')."',{rw_id:rw_id},function(data){
  		  		$('#rt_list').html(data);
  		  		$('#rt_id').select2({ 
  		  		  placeholder: 'Pilih RT',    
                });
            })
        }) ;  		    		  		    		  		    		  		    		
  ") ;
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pelanggan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
   
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
	  <div class="span12">
	  <fieldset>
	    <legend>Identitas</legend>
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'kode_pelanggan',array('class'=>'span5','maxlength'=>11)); ?>
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'kode_loket',array('class'=>'span5','maxlength'=>3)); ?>
		  </div>		  	    
	    </div>
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>100)); ?>
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'nama_singkat',array('class'=>'span5','maxlength'=>50)); ?>
		  </div>		  	    
	    </div>	    
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'dtgl_masuk',array('class'=>'span5')); ?>    
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'npwp',array('class'=>'span5','maxlength'=>20)); ?>    
		  </div>		  	    
	    </div>	    	    
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'kode_usaha',array('class'=>'span5','maxlength'=>6)); ?>      
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'kode_salesman',array('class'=>'span5','maxlength'=>9)); ?>    
		  </div>		  	    
	    </div>	    	    	    
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'pembayaran',array('class'=>'span5','maxlength'=>1)); ?>        
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>1)); ?>    
		  </div>		  	    
	    </div>	    	    	    	    
	  </fieldset>
	  </div>
	</div>
	
	<div class="row">
	  <div class="span12">
	  <fieldset>
	    <legend>Kontak</legend>
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'telepon',array('class'=>'span5','maxlength'=>20)); ?>
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'telepon2',array('class'=>'span5','maxlength'=>20)); ?>
		  </div>		  	    
	    </div>
	  </fieldset>
	  </div>
	</div>	
	
	<div class="row">
	  <div class="span12">
	  <fieldset>
	    <legend>Alamat</legend>
	    <div class="row">
	      <div class="span6">
	      <?php echo CHtml::label("Negara <span class='required'>*</span>", "negara_id") ;?>
          <?php 
          $this->widget('bootstrap.widgets.TbSelect2', array(
          		'asDropDownList' => true,
          		'name' => 'negara_id',
                'data'=>CHtml::listData(Lokasi::model()->roots()->findAll(), 'id', 'nama'),
                'attribute'=>array('value'=>'tes'), 
                'options'=>array(
                  'placeholder' => 'Pilih Negara',                    
                 ),
                'htmlOptions'=>array( 
                  'prompt'=>'',
                 )
          		));          
          ?>	      
	      </div>
	      <div class="span6">
	        &nbsp;
	      </div>
	    </div>
	    <div class="row">
	      <div class="span6">
	        <?php echo CHtml::label("Propinsi <span class='required'>*</span>", "propinsi_id") ;?>
	        <div  id="propinsi_list">
	          <span class="uneditable-input">Pilih Negara Terlebih dahulu</span>
	        </div>	      
	      </div>	      	    
	      <div class="span6">
	        <?php echo CHtml::label("Kotamadya/Kabupaten <span class='required'>*</span>", "kota_kab_id") ;?>
	        <div id="kabkota_list">
	          <span class="uneditable-input">Pilih Propinsi Terlebih dahulu</span>
	        </div>	      
	      </div>
	    </div>
	    <div class="row">
	      <div class="span6">
	        <?php echo CHtml::label("Kecamatan <span class='required'>*</span>", "kecamatan_id") ;?>
	        <div id="kecamatan_list">
	          <span class="uneditable-input">Pilih Kotamadya/Kabupaten Terlebih dahulu</span>
	        </div>	      	      	      
	      </div>
	      <div class="span6">
	        <?php echo CHtml::label("Kelurahan <span class='required'>*</span>", "kelurahan_id") ;?>
	        <div id="kelurahan_list">
	          <span class="uneditable-input">Pilih Kecamatan Terlebih dahulu</span>
	        </div>	      	      	      	      
	      </div>	      
	    </div>
	    <div class="row">
	      <div class="span6">
	        <?php echo CHtml::label("RW <span class='required'>*</span>", "rw_id") ;?>
	        <div id="rw_list">
	          <span class="uneditable-input">Pilih Kelurahan Terlebih dahulu</span>
	        </div>	      	      	      	      	      
	      </div>
	      <div class="span6">
	        <?php echo CHtml::label("RT <span class='required'>*</span>", "rt_id") ;?>
	        <div id="rt_list">
	          <span class="uneditable-input">Pilih RW Terlebih dahulu</span>
	        </div>	      	      	      	      	      	      
	      </div>	      
	    </div>
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>100)); ?>
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'alamat_tagih',array('class'=>'span5','maxlength'=>100)); ?>
		  </div>		  	    
	    </div>
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'lokasi_id',array('class'=>'span5','maxlength'=>20)); ?>    
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'kode_pos',array('class'=>'span5','maxlength'=>5)); ?> 
		  </div>		  	    
	    </div>	    
	  </fieldset>
	  </div>
	</div>		
	
	<div class="row">
	  <div class="span12">
	  <fieldset>
	    <legend>Nol Sampah</legend>
	    <div class="row">
		  <div class="span6">
	        <?php echo $form->textFieldRow($model,'takakura_pinjaman',array('class'=>'span5')); ?>	    
		  </div>
		  <div class="span6">
            <?php echo $form->textFieldRow($model,'takakura_uang_jaminan',array('class'=>'span5','maxlength'=>10)); ?>		    
		  </div>		  	    
	    </div>
	    <div class="row">
		  <div class="span6">
	        <?php echo $form->textFieldRow($model,'tong_sampah_pinjaman',array('class'=>'span5')); ?>	    
		  </div>
		  <div class="span6">
           <?php echo $form->textFieldRow($model,'tong_sampah_uang_jaminan',array('class'=>'span5','maxlength'=>10)); ?>            		    
		  </div>		  	    
	    </div>	    
	  </fieldset>
	  </div>
	</div>			

	
	<div class="row">
	  <div class="span12">
	  <fieldset>
	    <legend>Lain-Lain</legend>
	    <div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'attn',array('class'=>'span5','maxlength'=>20)); ?>
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'term',array('class'=>'span5')); ?>
		  </div>		
		</div>	
		<div class="row">
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'transfer',array('class'=>'span5','maxlength'=>1)); ?>
		  </div>
		  <div class="span6">
		    <?php echo $form->textFieldRow($model,'cetak_harga',array('class'=>'span5','maxlength'=>1)); ?>
		  </div>		  
		</div>				  	        
	  </fieldset>
	  </div>
	</div>	
    <div class="row">
      <div class="span12">
		<div class="form-actions">
		   <div class="pull-right">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>$model->isNewRecord ? 'Simpan' : 'Simpan',
			)); ?>
			</div>
		</div>        
      </div>
    </div>
<?php $this->endWidget(); ?>
