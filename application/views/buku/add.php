<section class="content">
	<div clas="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-little">Tambah Buku</h1>
				</div>
				<div class="box-body">
					<form action="<?=site_url('buku/create');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
							<div class="form-group">
								<label>Judul Buku</label>
								<input type="text" name="judul_buku" class="form-control" value"" placeholder="Masukan Judul  Buku" requiered="required">
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select name="id_kategori" size="1" class="form-control">
								<?php
								foreach($show_kategori as $key => $data_kategori){
									echo'<option value="'.$data_kategori->id_kategori.'">'
									.$data_kategori->nama_kategori.'</option>';
								}
								?>
								</select>
							</div>
							<div class="form-group">
								<label>Pengarang</label>
								<input type="text" name="pengarang" class="form-control" value"" placeholder="Masukan Nama Pengarang" requiered="required">
							</div>
							<div class="form-group">
								<label>Tahun Terbit</label>
							<input type="number" class="form-control" name="thn_terbit" min="0">
							</div>
							<div class="form-group">
								<label for="exampleInputtext1">Penerbit</label>
								<input type="text" name="penerbit" class="form-control" value"" id="exampleInputtext1" placeholder="Masukan Nama Penerbit" requiered="required">
							</div>
							<div class="form-group">
								<label for="exampleInputtext1">ISBN</label>
								<input type="text" name="isbn" class="form-control" value"" id="exampleInputtext1" placeholder="Masukan No ISBN" requiered="required">
							</div>
							<div class="form-group">
								<label for="exampleInputtext1">Jumlah</label>
								<input type="text" name="jumlah_buku" class="form-control" value"" id="exampleInputtext1" placeholder="0" requiered min="0">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Rak</label>
								<select name="lokasi" size="1" class="form-control">
									<option value="default">Pilih rak</option>
									<option value="1">Rak 1</option>
									<option value="2">Rak 2</option>
									<option value="3">Rak 3</option>
									<option value="4">Rak 4</option>
									<option value="5">Rak 5</option>
								</select>
							</div>

						</div>

						<div class="box-footer">
							<button type="button" class="btn bt`n-default"> <i class="fa fa-arrow-cirle-left"></i>Batal</button>
							<button type="submi" class="btn btn-primary pull-right"> <i class="fa fa-send"></i>Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
