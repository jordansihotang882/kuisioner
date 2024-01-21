

 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Tabel Pertanyaan</h2>
                            <a href="<?php echo base_url('admin/pertanyaan/tambah_pertanyaan') ?>"><button class="btn btn-success">Tambah Pertanyaan</button></a>
                            
                        </div>
                        </div>
                        <div class="table-responsive">
                           <table class="table table-bordered">
		<tr>
		<th>No</th>
		<th>Kuisioner</th>
		<th>Pertanyaan</th>
		<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach($pertanyaan as $sk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $sk->kuisioner ?></td>
				<td><?php echo $sk->pertanyaan ?></td>
				<td width="20px"><?php echo anchor('admin/pertanyaan/update/'.$sk->id_pertanyaan,'<div class="btn btn-primary btn-sm"><i class="notika-icon notika-refresh"></i></div>') ?></td>
				<td width="20px"><?php echo anchor('admin/pertanyaan/tambah_pilihan/'.$sk->id_pertanyaan,'<div class="btn btn-primary btn-sm"><i class="notika-icon notika-refresh"></i></div>') ?></td>
				<td width="20px"><?php echo anchor('admin/kuisioner/delete/'.$sk->id_pertanyaan,'<div class="btn btn-danger btn-sm"><i class="notika-icon notika-close"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>
	</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>