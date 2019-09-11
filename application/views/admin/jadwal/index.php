<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <a class="btn btn-outline-success" href="<?= base_url('admin/jadwal/tambah') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
          <hr>

          <!-- Datatable -->
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Stasiun Asal</th>
                  <th>Stasiun Tujuan</th>
                  <th>Kereta Api</th>
                  <th>Harga</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($jadwal as $value): ?>
                  <tr>
                    <td><?= $no++ . '.' ?></td>
                    <td><?= $value['asal'] ?></td>
                    <td><?= $value['tujuan'] ?></td>
                    <td><?= $value['nama_kereta'] ?> | <?= $value['tipe_kereta'] ?></td>
                    <td><?= 'Rp.' . $value['harga'] ?></td>
                    <td><?= $value['tanggal'] .' '. $value['waktu_berangkat'] ?></td>
                    <td align="center">
                      <a href="<?= base_url('admin/jadwal/update/' . $value['id_jadwal']) ?>">
                        <button class="btn btn-primary btn-sm">Ubah</button>
                      </a>
                      <a href="<?= base_url('admin/jadwal/delete/' . $value['id_jadwal']) ?>">
                        <button class="btn btn-danger btn-sm">Hapus</button>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /Datatable -->

        </div>
      </div>
    </div>
  </div>
</div>
