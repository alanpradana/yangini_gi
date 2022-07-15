<div class="container-fluid">


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Kriteria</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('AuthController/tambahkodekriteria') ?>">
						<div class="form-group">
							<label for="formGroupExampleInput">Kode Kriteria</label>
							<input name="kodeKriteria" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Kriteria</label>
							<input name="kriteria" type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Bobot Nilai</label>
							<input name="bobotNilai" type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col ml-2 mt-3 mb-2">
					<h3>Data Kriteria</h3>
					<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data Kriteria</a>
					<?= $this->session->flashdata('pesanDosen'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-bordered text-center">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Kriteria</th>
								<th scope="col">Sub Kriteria - Bobot</th>
								<th scope="col">Bobot</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($table2 as $row) : ?>
								<tr>
									<th scope="row"> <?= $no++; ?> </th>
									<td><?= $row['kode_kriteria']; ?></td>
									<td><?= $row['kriteria']; ?></td>
									<td><?= $row['bobot_nilai']; ?></td>
									<td>
										<a href="<?= base_url('AuthController/hapusKriteria/') . $row['id']; ?>" onclick="return confirm('Yakin Inggin Menghapus');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
										<a href="#" data-toggle="modal" data-target="#EditModal<?= $row['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
									</td>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Edit-->
	<?php foreach ($table2 as $row) : ?>
		<div class="modal fade" id="EditModal<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Data Kriteria</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('AuthController/tambahkodekriteria') ?>">
							<div class="form-group">
								<label for="formGroupExampleInput">Kode Kriteria</label>
								<input name="kodeKriteria" value="<?= $row["kode_kriteria"]; ?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput2">Kriteria</label>
								<input name="kriteria" type="text" value="<?= $row["kriteria"]; ?>" class="form-control" id="formGroupExampleInput2" placeholder="">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput2">Bobot Nilai</label>
								<input name="bobotNilai" type="text" value="<?= $row["bobot_nilai"] ?>" class="form-control" id="formGroupExampleInput2" placeholder="">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	<?php endforeach; ?>
