<div class="container-fluid">


	<!-- <div class="row">
    <div class="col-md-4">
    <h3>Masukan Data Peternak</h3>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
    </div> -->


	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col ml-2 mt-3 mb-2">
					<h3>Data Peternak</h3>
					<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data Peternak</a>
					<?= $this->session->flashdata('pesanDosen'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-bordered text-center">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col" class="text-center">Nama</th>
								<th scope="col">Keadaan Ekonomi</th>
								<th scope="col">Pendidikan Terakhir</th>
								<th scope="col">Jumlah Tanggungan</th>
								<th scope="col">Jumlah Pengeluaran</th>
								<th scope="col">Lokasi Ternak</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($table1 as $row) : ?>
								<tr>
									<th scope="row"> <?= $no++; ?> </th>
									<td><?= $row['nama_peternak']; ?></td>
									<td><?= $row['keadaan_ekonomi']; ?></td>
									<td><?= $row['pendidikan_terakhir']; ?></td>
									<td><?= $row['jumlah_tanggungan']; ?></td>
									<td><?= $row['jumlah_pengeluaran']; ?></td>
									<td><?= $row['lokasi_ternak']; ?></td>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>





	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('AuthController/tambahdatapeternak') ?>">
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold" class="font-weight-bold">Nama</label>
							<input type="text" name="nama_peternak" class="form-control" id="recipient-name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Keadaan Ekonomi</label>
							<select class="custom-select" name="keadaan_ekonomi">
								<option selected>--</option>
								<option value="Miskin">Miskin</option>
								<option value="Sangat Miskin">Sangat Miskin</option>
								<option value="Sederhana">Sederhana</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Pendidikan Terakhir</label>
							<select class="custom-select" name="pendidikan_terakhir">
								<option selected>--</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Jumlah Tanggungan</label>
							<select class="custom-select" name="jumlah_tanggungan">
								<option selected>--</option>
								<option value="Rp 1.000.000">Rp 1.000.000</option>
								<option value="Rp 2.000.000">Rp 2.000.000</option>
								<option value="Rp 3.000.000">Rp 3.000.000</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Jumlah Pengeluaran/bulan</label>
							<select class="custom-select" name="jumlah_pengeluaran">
								<option>--</option>
								<option value="Rp 1.000.000">Rp 1.000.000</option>
								<option value="Rp 2.000.000">Rp 2.000.000</option>
								<option value="Rp 3.000.000">Rp 3.000.000</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Lokasi Ternak</label>
							<select class="custom-select" name="lokasi_ternak">
								<option selected>--</option>
								<option value="Sawah">Sawah</option>
								<option value="Sungai">Sungai</option>
								<option value="Tanah Sendiri">Tanah Sendiri</option>
							</select>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
