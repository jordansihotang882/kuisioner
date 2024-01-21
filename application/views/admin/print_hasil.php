

 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Tabel Hasil</h2>
                        </div>
                        <div class="table-responsive">
                           <table class="table table-bordered">
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Status</th>
		<th>Pertanyaan 1</th>
		<th>Pertanyaan 2</th>
		<th>Pertanyaan 3</th>
		<th>Pertanyaan 4</th>
		<th>Pertanyaan 5</th>
		<th>Pertanyaan 6</th>
		<th>Pertanyaan 7</th>
		<th>Pertanyaan 8</th>
		<th>Pertanyaan 9</th>
		<th>Pertanyaan 10</th>
		<th>Pertanyaan 11</th>
		<th>Pertanyaan 12</th>
		<th>Pertanyaan 13</th>
		<th>Pertanyaan 14</th>
		<th>Pertanyaan 15</th>
		<th>Pertanyaan 16</th>
		<th>Pertanyaan 17</th>
		<th>Pertanyaan 18</th>
		<th>Pertanyaan 19</th>
		<th>Pertanyaan 20</th>
		<th>Pertanyaan 21</th>
		<th>Pertanyaan 22</th>
		<th>Pertanyaan 23</th>
		<th>Pertanyaan 24</th>
		<th>Pertanyaan 25</th>
		<th>Pertanyaan 26</th>
		
		</tr>
		<?php 
		$no=1;
		foreach($hasil as $sk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $sk->nama ?></td>
				<td><?php echo $sk->status ?></td>
				<td><?php echo $sk->p1 ?></td>
				<td><?php echo $sk->p2 ?></td>
				<td><?php echo $sk->p3 ?></td>
				<td><?php echo $sk->p4 ?></td>
				<td><?php echo $sk->p5 ?></td>
				<td><?php echo $sk->p6 ?></td>
				<td><?php echo $sk->p7 ?></td>
				<td><?php echo $sk->p8 ?></td>
				<td><?php echo $sk->p9 ?></td>
				<td><?php echo $sk->p10 ?></td>
				<td><?php echo $sk->p11 ?></td>
				<td><?php echo $sk->p12 ?></td>
				<td><?php echo $sk->p13 ?></td>
				<td><?php echo $sk->p14 ?></td>
				<td><?php echo $sk->p15 ?></td>
				<td><?php echo $sk->p16 ?></td>
				<td><?php echo $sk->p17 ?></td>
				<td><?php echo $sk->p18 ?></td>
				<td><?php echo $sk->p19 ?></td>
				<td><?php echo $sk->p20 ?></td>
				<td><?php echo $sk->p21 ?></td>
				<td><?php echo $sk->p22 ?></td>
				<td><?php echo $sk->p23 ?></td>
				<td><?php echo $sk->p24 ?></td>
				<td><?php echo $sk->p25 ?></td>
				<td><?php echo $sk->p26 ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    	window.print()
    </script>