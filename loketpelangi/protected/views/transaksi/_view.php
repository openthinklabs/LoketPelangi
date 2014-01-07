<fieldset>
  <legend><?php echo CHtml::link(CHtml::encode($data->kodePelanggan->nama),array('view','id'=>$data->id)); ?>, <?php echo CHtml::encode($data->tanggal); ?></legend>

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
      <td style="text-align:right"><?php echo $transaksiDetail->harga ?></td>
      <td style="text-align:right"><?php echo $line_total ;?></td>
    </tr> 
    <?php } ?>
  </tbody>
</table>

</fieldset>