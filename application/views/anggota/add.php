<section class="content">
	<div clas="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-little">Tambah Anggota</h1>
				</div>
				<div class="box-body">
					<form action="<?=site_url('anggota/create');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Anggota</label>
								<input type="text" name="pengarang" class="form-control" value"" placeholder="Masukan Nama Pengarang" requiered="required">
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="gender" size="1" class="form-control">
									<option value="default">Pilih Jenis Kelamin</option>
									<option value="Laki Laki">Laki Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>

							<label>No Telp</label>
							<input type="number" class="form-control" name="no_telp" min="0" placeholder="Masukan 
							No Telp">
							
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" value"" id="exampleInputtext1" placeholder="Masukan Alamat" requiered="required">
							</div>
							<div class="form-group">
								<label for="exampleInputtext1">Email</label>
								<input type="text" name="email" class="form-control" value"" id="exampleInputtext1" placeholder="Masukan Email" requiered="required">
							</div>
							<div class="form-group">
								<label for="exampleInputtext1">Password</label>
								<input type="text" name="password" class="form-control" value"" id="exampleInputtext1" placeholder="Masukkan Password" requiered min="Required">
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
