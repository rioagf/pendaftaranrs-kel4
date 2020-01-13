<?php $this->load->view('template/header');?>
<head>
	<title>Tambah Data Medrek</title>
</head>
<?php foreach ($dpas as $pas): ?>
	<?php $id = $pas->id_pasien?>
<?php endforeach ?>
<div class="container" style="margin-top:120px;">
	<div class="form-wrapper">
		<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
			<div class="panel panel-skin">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> <?php echo $page;?> Medrek</h3>
				</div>
				<div class="panel-body">
					<div class="row" style="padding: 0 20px">
						<form action="<?php echo $action ?>" method="post">
							<div class="col-md-6">
								<input type="text" name="no_medrek" value="<?php echo $no_medrek ?>" hidden />
								<label>ID Pasien</label>
								<input type="text" name="id_pasien" value="<?php echo ++$id;?>" class="form-control" readonly />
								<label>Nama Pasien</label>
								<input type="text" name="nama_pasien" value="<?php echo $nama_pasien ?>" class="form-control" placeholder="Nama Pasien" class="form-control" />
								<label>Jenis Kelamin</label>
								<select name="j_kelamin" class="form-control">
									<option value="L">Laki - Laki</option>
									<option value="P">Perempuan</option>
								</select>
								<label>Tanggal Lahir</label>
								<input type="date" name="ttl_pasien" value="<?php echo $ttl_pasien ?>" class="form-control" placeholder="(dd/mm/Y)" />
								<label>Usia</label>
								<input type="text" name="usia" value="<?php echo $usia ?>" class="form-control" placeholder="Usia Pasien" />
								<label>Alamat</label>
								<textarea name="alamat_pasien" class="form-control" placeholder="Alamat Pasien"><?php echo $alamat_pasien?></textarea>
								<label>Kota</label>
								<input type="text" name="kota_pasien" value="<?php echo $kota_pasien?>" class="form-control" placeholder="Kota Pasien">
							</div>
							<div class="col-md-6">
								<label>Keluhan</label>
								<textarea name="keluhan" rows="5" class="form-control" placeholder="Keluhan Yang Dirasakan"><?php echo $keluhan ?></textarea>
								<label>Keluhan</label>
								<select name="poli" class="form-control">
									<option value="Umum">Umum</option>
									<option value="Mata">Mata</option>
									<option value="THT">THT</option>
									<option value="THT">Bedah</option>
									<option value="THT">Jantung</option>
								</select>
								<label>Keluhan</label>
								<select name="id_dokter" class="form-control">
									<?php foreach ($ddok as $dok): ?>
										<option value="<?php echo $dok->id_dokter;?>"><?php echo 'Dokter '.$dok->nama_dokter.' ( '.$dok->spesialis.' )';?></option>
									<?php endforeach ?>
								</select>
								<label>Keluhan</label>
								<input type="text" name="penyakit" value="<?php echo $penyakit ?>" class="form-control" placeholder="Penyakit" />
								<label>Keluhan</label>
								<select name="status" class="form-control">
									<option value="Rawat Jalan">Rawat Jalan</option>
									<option value="Rawat Inap">Rawat Inap</option>
								</select><br/>
								<button type="submit" class="btn btn-skin">TAMBAH DATA</button> <a href="<?php echo base_url('medrek')?>" class="btn btn-skin">Cancel</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('template/footer');?>