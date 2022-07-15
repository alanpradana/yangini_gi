<div class="container-fluid">

	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col ml-2 mt-3 mb-2">
					<h3>Alternatif</h3>
					<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data Alternatif</a>
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
							<?php
							$no = 1;
							foreach ($items as $item) : ?>
								<tr>
									<th scope="row"> <?= $no++; ?> </th>
									<td><?= $item["kode_alternatif"]; ?></td>
									<td><?= $item["nama_alternatif"]; ?></td>
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
					<form method="post" action="<?= base_url('AuthController/tambahdataalternatif') ?>">
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Kode Alternatif</label>
							<input name="kode_alternatif" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="font-weight-bold">Nama Alternatif</label>
							<input name="nama_alternatif" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
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
