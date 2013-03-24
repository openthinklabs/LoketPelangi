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
