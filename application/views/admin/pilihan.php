

 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Tabel Pilihan</h2>
                            
                        </div>
                       
	
	<a href="<?php echo base_url('admin/pertanyaan/tambah_pilihan') ?>"><button class="btn btn-success">Tambah Pilihan</button></a>
	   <table class="table table-bordered">
		<tr>
		<th>No</th>
		<th>Pilihan 1</th>
		<th>Pilihan 2</th>
		<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach($pilihan as $sk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $sk->pilihan1 ?></td>
				<td><?php echo $sk->pilihan2 ?></td>
				<td width="20px"><?php echo anchor('admin/pertanyaan/update_pilihan/'.$sk->id_pilihan,'<div class="btn btn-primary btn-sm"><i class="notika-icon notika-refresh"></i></div>') ?></td>
				
				<td width="20px"><?php echo anchor('admin/kuisioner/delete/'.$sk->id_pilihan,'<div class="btn btn-danger btn-sm"><i class="notika-icon notika-close"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>
	</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>