<div class="container-fluid">
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
								<th scope="col" class="text-center">Kode keriteria</th>
								<th scope="col">Nama Kriteria</th>
								<th scope="col">Bobot Kriteria</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($items as $item) : ?>
								<tr>
									<th scope="row"> <?= $no++; ?> </th>
									<td><?= $item["kode_kriteria"]; ?></td>
									<td><?= $item["nama_kriteria"]; ?></td>
									<td><?= $item["bobot_kriteria"]; ?></td>
									<td>
										<a href="<?= base_url("Kriteria/destroy/") . $item['id'] ?>" onclick="return confirm('Yakin Inggin Menghapus');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
									</td>
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
					<form method="post" action="<?= base_url("Kriteria/create") ?>">
						<div class="form-group">
							<label for="kode_kriteria" class="font-weight-bold" class="font-weight-bold">Kode Kriteria</label>
							<input type="text" name="kode_kriteria" class="form-control" id="kode_kriteria">
						</div>
						<div class="form-group">
							<label for="nama_kriteria" class="font-weight-bold">Nama kriteria</label>
							<input type="text" name="nama_kriteria" class="form-control" id="nama_kriteria">
						</div>
						<div class="form-group">
							<label for="bobot_kriteria" class="font-weight-bold">Bobot kriteria</label>
							<input type="text" name="bobot_kriteria" class="form-control" id="bobot_kriteria">
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
