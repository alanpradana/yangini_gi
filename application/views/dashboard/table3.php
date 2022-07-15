<div class="container-fluid">

	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col ml-2 mt-3 mb-2">
					<h3>Data Sub Kriteria</h3>
					<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data Sub Peternak</a>
					<?= $this->session->flashdata('pesanDosen'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-bordered text-center">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col" class="text-center">Kode Alternatif</th>
								<th scope="col">Nama Alternatif</th>
							</tr>
						</thead>
						<tbody>

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
							<label for="exampleInputEmail1" class="font-weight-bold">Nama Kriteria</label>
							<select class="custom-select" name="keadaan_ekonomi">
								<option selected>--</option>
								<option value="Miskin">C1</option>
								<option value="Sangat Miskin">C2</option>
								<option value="Sederhana">C3</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Sub Kriteria</label>
							<select class="custom-select" name="pendidikan_terakhir">
								<option selected>--</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Bobot Nilai</label>
							<select class="custom-select" name="jumlah_tanggungan">
								<option selected>--</option>
								<option value="Rp 1.000.000">Rp 1.000.000</option>
								<option value="Rp 2.000.000">Rp 2.000.000</option>
								<option value="Rp 3.000.000">Rp 3.000.000</option>
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
