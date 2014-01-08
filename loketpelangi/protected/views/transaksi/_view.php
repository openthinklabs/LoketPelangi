<fieldset>
  <legend>  
    <div class="row-fluid">
      <div class="span6">
        <?php echo CHtml::link(CHtml::encode($data->kodePelanggan->nama),array('view','id'=>$data->id)); ?>, <small><?php echo CHtml::encode($data->tanggal); ?></small>
      </div>
      <div class="span6">
        <div class="pull-right">
          <small>Divisi : <?php echo $data->kodeDivisi?$data->kodeDivisi->keterangan:"-";?></small>
        </div>
      </div>
    </div>
  </legend>
   
<table class="table table-bordered table-striped table-condensed">
  <caption>Transaksi Detail</caption>
  <thead>
    <tr>
      <th>Produk</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Total</th> 
    </tr>
  </thead>
  <tbody>
    <?php foreach($data->transaksiDetails as $transaksiDetail){?>
    <?php $line_total = $transaksiDetail->qty*$transaksiDetail->harga ;?> 
    <tr>
      <td><?php echo $transaksiDetail->kodeProduk->nama ;?></td>
      <td style="text-align:center"><?php echo $transaksiDetail->qty ;?></td>
      <td style="text-align:right"><?php echo Yii::app()->numberFormatter->formatCurrency($transaksiDetail->harga,'IDR'); ?></td>
      <td style="text-align:right"><?php echo Yii::app()->numberFormatter->formatCurrency($line_total,'IDR') ;?></td>
    </tr> 
    <?php } ?>
  </tbody>
</table>

</fieldset>