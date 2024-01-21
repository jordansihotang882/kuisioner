


<div class="page-container2 ml-2">
<div class="card">
  <div class="card-header">
    Data Pemakaian
  </div>
</div>
<table class="table table-bordered 700px">
		<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Meter Awal</th>
		<th>Meter Akhir</th>
		<th>Jumlah Meter</th>
		
		</tr>
		<?php 
		$no=1;
		foreach($pemakaian as $pmk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $pmk->bulan ?></td>
				<td><?php echo $pmk->meter_awal ?></td>
				<td><?php echo $pmk->meter_akhir ?></td>
					<td><?php echo number_format($pmk->meter_akhir - $pmk->meter_awal) ?></td>
					<?php endforeach; ?>
			</tr>
		
	</table>
</div>