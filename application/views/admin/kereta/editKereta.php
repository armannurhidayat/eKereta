<div class="container-fluid">
  <div class="alert alert-info" role="alert">
    <strong><i class="mdi mdi-information-outline"></i> Yang diberi tanda (*) harus diisi.</strong>
  </div>

  <a href="<?= base_url('admin/kereta') ?>" class="btn btn-warning my-2 text-white">
    <i class="mdi mdi-chevron-double-left"></i> Kembali
  </a>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <form action="<?= base_url('admin/kereta/update/' . $kereta['id']) ?>" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $kereta['id'] ?>">
          <div class="card-body col-6">
            <div class="form-group m-t-20">
              <label for="nama_kereta">Nama Kereta *</label>
              <input type="text" name="nama_kereta" id="nama_kereta" class="form-control date-inputmask" value="<?= $kereta['nama_kereta'] ?>">
              <strong class="text-danger"><?= form_error('nama_kereta') ?></strong>
            </div>
            <div class="form-group m-t-20">
              <label for="tipe_kereta">Tipe Kereta *</label>
                <select name="tipe_kereta" id="tipe_kereta" class="form-control select2">
                  <option value=""></option>
                  <option value="Eksekutif" <?= $kereta['tipe_kereta'] == 'Eksekutif' ? 'selected' : null ?>>Eksekutif</option>
                  <option value="Ekonomi" <?= $kereta['tipe_kereta'] == 'Ekonomi' ? 'selected' : null ?>>Ekonomi</option>
                  <option value="Bisnis" <?= $kereta['tipe_kereta'] == 'Bisnis' ? 'selected' : null ?>>Bisnis</option>
                  <option value="Prioritas" <?= $kereta['tipe_kereta'] == 'Prioritas' ? 'selected' : null ?>>Prioritas</option>
                  <option value="Sleeper" <?= $kereta['tipe_kereta'] == 'Sleeper' ? 'selected' : null ?>>Sleeper</option>
                </select>
                <strong class="text-danger"><?= form_error('tipe_kereta') ?></strong>
            </div>
            
            <center>
              <button type="reset" class="btn btn-danger"><i class="mdi mdi-replay"></i> Reset</button>
              <button type="submit" class="btn btn-success"><i class="mdi mdi-checkbox-marked-circle-outline"></i> Simpan</button>
            </center>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>