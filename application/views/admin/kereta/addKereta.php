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
        <form action="<?= base_url('admin/kereta/tambah') ?>" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $uuid ?>">
          <div class="card-body col-md-6 col-md-offset-1">
            <div class="form-group m-t-20">
              <label for="nama_kereta">Nama Kereta *</label>
              <input type="text" name="nama_kereta" id="nama_kereta" class="form-control" value="<?= set_value('nama_kereta') ?>">
              <strong class="text-danger"><?= form_error('nama_kereta') ?></strong>
            </div>
            <div class="form-group m-t-20">
              <label for="tipe_kereta">Tipe Kereta *</label>
                <select name="tipe_kereta" id="tipe_kereta" class="<?= form_error('tipe_kereta') ? 'is-invalid' : null ?> form-control select2">
                  <option value=""></option>
                  <option value="Eksekutif" <?= set_select('tipe_kereta', 'Eksekutif') ?>>Eksekutif</option>
                  <option value="Ekonomi" <?= set_select('tipe_kereta', 'Ekonomi') ?>>Ekonomi</option>
                  <option value="Bisnis" <?= set_select('tipe_kereta', 'Bisnis') ?>>Bisnis</option>
                  <option value="Prioritas" <?= set_select('tipe_kereta', 'Prioritas') ?>>Prioritas</option>
                  <option value="Sleeper" <?= set_select('tipe_kereta', 'Sleeper') ?>>Sleeper</option>
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