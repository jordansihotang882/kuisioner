<div class="page-container2 ml-2"> 
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header alert alert-primary">
					Invoice Pembayaran
				</div>
				<div class="card-body">

					<table class="table">
						<?php foreach ($pemakaian as $pmk) : ?>
						<tr>
						<th>bulan</th>
						<td>:</td>
						<td><?php echo $pmk->bulan ?></td>
						</tr>
						<tr>
						<th>Jumlah Meter</th>
						<td>:</td>
						<td><?php echo $pmk->meter_akhir - $pmk->meter_awal ?></td>
						</tr>
						<tr>
						<th>Jumlah Bayar</th>
						<td>:</td>
						<td><?php echo ($pmk->meter_akhir - $pmk->meter_awal)*500 ?></td>
						<tr>
							</tr>	
						</tr>
						<?php endforeach; ?>
					</table>
					<?php if($pmk->status_pembayaran == "1"){ ?>
					<a href="<?php echo base_url('pemakaian/kuitansi/'.$pmk->id_pemakaian) ?>"><button class="btn btn-primary">Print Kuitansi</button></a>
				<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-md-5  mb-2">
			<div class="card-header">
				<div class="card-header alert alert-success">
			Informasi Pembayaran	
			</div>
			<div class="card-body">
			<p>silahkan melakukan pembayaran pada salah satu nomor rekening di bawah</p><br>
			<li>BANK BCA 12098789 Atas Nama Noel Sihotang</li>
			<li>BANK BRI 1298788998 Atas Nama Noel Sihotang</li>
			<li>BANK BNI 128787888 Atas Nama Noel Sihotang</li>
			<center>
			<?php if(empty($pmk->bukti_pembayaran)){ ?>
				<button class="btn btn-sm btn-danger mt-2" data-toggle="modal" data-target="#exampleModal">Upload Bukti Pembayaran</button>
			<?php }elseif($pmk->status_pembayaran =='0'){ ?>
				<button class="btn btn-sm btn-warning">Menunggu Konfirmasi</button>
			<?php }elseif($pmk->status_pembayaran =='1'){ ?> 
				<button width="100%" class="btn btn-sm btn-success">Sudah Bayar</button>
			<?php } ?>
			</center>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?php echo base_url('pemakaian/pembayaran_aksi') ?>" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group">
					<label>Upload Bukti Pembayaran</label>
					<input type="hidden" class="form-control" name="id_pemakaian" value="<?php echo $pmk->id_pemakaian ?>">
					<input type="file" class="form-control" name="bukti_pembayaran">
				</div>
			</div >
			<div class="modal-footer">
				
				<button type="submit" class="btn btn-primary">Kirim</button>
			</div>
			</form>
		</div>
	</div>
</div>