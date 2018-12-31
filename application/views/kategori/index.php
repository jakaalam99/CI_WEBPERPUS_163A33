<section class="content">
	<div clas="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-little">Daftar Kategori</h1>
				</div>

				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>Pengarang</th>
									<th>Tahun Terbit</th>
									<th>kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($show as $key => $data){
								?>
								<tr>
									<td><?=$key+1;?></td>
									<td><?=$data->judul_buku;?></td>
									<td><?=$data->pengarang;?></td>
									<td><?=$data->thn_terbit;?></td>
									<td><?=$data->nama_kategori;?></td>
									<td>
										<a href="#" class="btn btn-xs btn-primary">Detai</a>
										<a href="#" class="btn btn-xs btn-warning">Edit</a>
									</td>
								</tr>
								<?php
								}
								?>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>Pengarang</th>
									<th>Tahun Terbit</th>
									<th>kategori</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
