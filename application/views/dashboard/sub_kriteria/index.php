<div class="container-fluid">
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Sub Kriteria</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('Sub_kriteria/create') ?>">
						<div class="form-group">
							<label for="kretera_id">Nama Kriteria</label>
							<select class="custom-select" name="kretera_id" id="kretera_id">
								<option selected>Choose...</option>
								<?php foreach ($items_kriteria as $item) : ?>
									<option value="<?= $item["id"] ?>"><?= $item["nama_kriteria"] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="sub_kriteria">Sub kriteria</label>
							<input name="sub_kriteria" type="text" class="form-control" id="sub_kriteria" placeholder="Sub Kriteria">
						</div>
						<div class="form-group">
							<label for="bobot_nilai">Bobot Nilai</label>
							<input name="bobot_nilai" type="text" class="form-control" id="bobot_nilai" placeholder="Bobot nilai">
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
					<h3>Data Sub Kriteria</h3>
					<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
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
								<th scope="col">Sub Kriteria</th>
								<th scope="col">Bobot</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($items as $item) : ?>
								<tr>
									<th scope="item"> <?= $no++; ?> </th>
									<td><?= $item['kretera_id']; ?></td>
									<td><?= $item['sub_kriteria']; ?></td>
									<td><?= $item['bobot_nilai']; ?></td>
									<td>
										<a href="<?= base_url('AuthController/hapusKriteria/') . $item['id']; ?>" onclick="return confirm('Yakin Inggin Menghapus');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
										<a href="#" data-toggle="modal" data-target="#EditModal<?= $item['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
									</td>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Edit-->
	<?php foreach ($items as $item) : ?>
		<div class="modal fade" id="EditModal<?= $item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Data Kriteria</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('Sub_kriteria/edit/') . $item["id"]  ?>">
							<div class="form-group">
								<label for="kretera_id">Nama Kriteria</label>
								<select class="custom-select" name="kretera_id" id="kretera_id">
									<option selected>Choose...</option>
									<?php foreach ($items_kriteria as $item_keriteria) : ?>
										<option value="<?= $item_keriteria["id"] ?>" <?php if ($item_keriteria["id"] == $item["kretera_id"]) {
																																		echo 'selected="selected"';
																																	} ?>>
											<?= $item_keriteria["nama_kriteria"] ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="sub_kriteria">Sub kriteria</label>
								<input name="sub_kriteria" type="text" value="<?= $item["sub_kriteria"] ?>" class="form-control" id="sub_kriteria" placeholder="Sub Kriteria">
							</div>
							<div class="form-group">
								<label for="bobot_nilai">Bobot Nilai</label>
								<input name="bobot_nilai" type="text" class="form-control" value="<?= $item["bobot_nilai"] ?>" id="bobot_nilai" placeholder="Bobot nilai">
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
