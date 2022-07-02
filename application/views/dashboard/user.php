<div class="container-fluid">

	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col ml-2 mt-3 mb-2">
					<h3>Data User</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-bordered text-center">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col" class="text-center">Nama</th>
								<th scope="col">Email</th>
								<th scope="col">Role</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($users as $user) : ?>
								<tr>
									<th scope="row"> <?= $no++; ?> </th>
									<td><?= $user['nama']; ?></td>
									<td><?= $user['email']; ?></td>
									<td><?= $user['role_id']; ?></td>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
