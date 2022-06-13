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
      <form method="post" action="<?= base_url('AuthController/tambahkodekriteria')?>">
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
              <th scope="col">Kode Kriteria</th>
              <th scope="col">Kriteria</th>
              <th scope="col">bobot nilai</th>
              <th scope="col">action</th>
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
                  <a href="<?= base_url('AuthController/hapusKriteria/') . $row['id_table2']; ?>" onclick="return confirm('Yakin Inggin Menghapus');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  <a href="#" data-toggle="modal" data-target="#exampleModal<?= $row['id_pegawai']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                </td>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



<!--
<div class="card-body">
    <div class="table-responsive"  id="dataTable" width="100%" cellspacing="0">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Kriteria</th>
      <th scope="col">Kriteria</th>
      <th scope="col">Bobot Nilai</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>C1</td>
      <td>Ekonomi Keluarga</td>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>C2</td>
      <td>Pendidikan Terakhir</td>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>C3</td>
      <td>Jumlah Tanggungan</td>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>C4</td>
      <td>Jumlah Penghasilan</td>
      <td>15</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>C5</td>
      <td>Lokasi Ternak</td>
      <td>10</td>
    </tr>
  </tbody>
</table>
    </div>
</div>