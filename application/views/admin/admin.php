

 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Tabel Admin</h2>
                            <a href="<?php echo base_url('admin/admin/tambah_admin') ?>"><button class="btn btn-success">Tambah Admin</button></a>
                        </div>
                        <div class="table-responsive">
                           <table class="table table-bordered">
		<tr>
		<th>No</th>
		<th>Nama Admin</th>
		<th>Username</th>
		<th>Password</th>
		<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach($admin as $sk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $sk->nama_admin ?></td>
				<td><?php echo $sk->username ?></td>
				<td><?php echo $sk->password ?></td>
				<td width="20px"><?php echo anchor('admin/admin/update/'.$sk->id_admin,'<div class="btn btn-primary btn-sm"><i class="notika-icon notika-refresh"></i></div>') ?></td>
				<td width="20px"><?php echo anchor('admin/admin/delete/'.$sk->id_admin,'<div class="btn btn-danger btn-sm"><i class="notika-icon notika-close"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>
	</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>