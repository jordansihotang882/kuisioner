

 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Tabel Responden</h2>
                            <a href="<?php echo base_url('admin/responden/tambah_responden') ?>"><button class="btn btn-success">Tambah Responden</button></a>
                        </div>
                        <div class="table-responsive">
                           <table class="table table-bordered">
		<tr>
		<th>No</th>
		<th>Nama Responden</th>
		<th>Npm</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Password</th>
		<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach($responden as $sk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $sk->nama ?></td>
				<td><?php echo $sk->npm ?></td>
				<td><?php echo $sk->alamat ?></td>
				<td><?php echo $sk->email ?></td>
				<td><?php echo $sk->password ?></td>
				<td width="20px"><?php echo anchor('admin/responden/update/'.$sk->id_responden,'<div class="btn btn-primary btn-sm"><i class="notika-icon notika-refresh"></i></div>') ?></td>
				<td width="20px"><?php echo anchor('admin/responden/delete/'.$sk->id_responden,'<div class="btn btn-danger btn-sm"><i class="notika-icon notika-close"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>
	</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>