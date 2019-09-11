<div class="container-fluid">

  <!-- Alert -->
  <?php if ($this->session->flashdata('tambah')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil!</strong> menambahkan Kota Stasiun.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif ?>

  <?php if ($this->session->flashdata('update')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil!</strong> memperbarui Kota Stasiun.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif ?>

  <?php if ($this->session->flashdata('hapus')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil!</strong> menghapus Kota Stasiun.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif ?>
  <!-- /Alert -->


  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <a class="btn btn-outline-success" href="<?= base_url('admin/stasiun/tambah') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
          <hr>

          <!-- Datatable -->
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Kota Stasiun</th>
                  <th>Kode Kota Stasiun</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($stasiun as $value): ?>
                  <tr>
                    <td><?= $no++ . '.' ?></td>
                    <td><?= $value['nama_stasiun'] ?></td>
                    <td><?= empty($value['kode_stasiun']) ? '-' : $value['kode_stasiun'] ?></td>
                    <td align="center">
                      <a href="<?= base_url('admin/stasiun/update/' . $value['id']) ?>">
                        <button class="btn btn-primary btn-sm">Ubah</button>
                      </a>
                      <a href="<?= base_url('admin/stasiun/delete/' . $value['id']) ?>">
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
