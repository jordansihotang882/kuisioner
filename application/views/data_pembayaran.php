


<div class="page-container2 ml-2">
<div class="card">
  <div class="card-header">
    Data Pembayaran
  </div>
</div>
<table class="table table-bordered 700px">
		<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Jumlah Meter</th>
		<th>Jumlah Pembayaran</th>
		<th>Status Pembayaran</th>
		</tr>
		<?php 
		$no=1;
		foreach($pemakaian as $pmk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $pmk->bulan ?></td>
					<td><?php echo number_format($pmk->meter_akhir - $pmk->meter_awal) ?></td>
					<td><?php echo number_format($pmk->meter_akhir - $pmk->meter_awal)*500 ?></td>
					<td>
						<?php if($pmk->status_pembayaran == "selesai"){ ?> <button class="btn btn-success">Sudah Dibayar</button>
					<?php }else{ ?>
						<a href="<?php echo base_url('pemakaian/pembayaran/'.$pmk->id_pemakaian) ?>" class="btn btn-primary">Lihat Status Pembayaran</a>
					<?php } ?>
					</td>
					<?php endforeach; ?>
			</tr>
		
	</table>
</div>