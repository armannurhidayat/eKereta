<div class="container-fluid">
  <div class="alert alert-info" role="alert">
    <strong><i class="mdi mdi-information-outline"></i> Yang diberi tanda (*) harus diisi.</strong>
  </div>

  <a href="<?= base_url('admin/stasiun') ?>" class="btn btn-warning my-2 text-white">
    <i class="mdi mdi-chevron-double-left"></i> Kembali
  </a>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <form action="<?= base_url('admin/stasiun/update/' . $stasiun['id']) ?>" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $stasiun['id'] ?>">
          <div class="card-body col-6">
            <div class="form-group m-t-20">
              <label for="nama_stasiun">Nama Kota Stasiun *</label>
              <input type="text" name="nama_stasiun" id="nama_stasiun" class="form-control date-inputmask" value="<?= $stasiun['nama_stasiun'] ?>">
              <strong class="text-danger"><?= form_error('nama_stasiun') ?></strong>
            </div>
            <div class="form-group m-t-20">
              <label for="kode_stasiun">Kode Kota Stasiun</label>
              <input type="text" name="kode_stasiun" id="kode_stasiun" class="form-control date-inputmask" value="<?= $stasiun['kode_stasiun'] ?>">
            </div>
            <div class="form-group m-t-20">
              <label for="is_kota">Kota Stasiun</label>
              <select name="is_kota" id="is_kota" class="form-control select2">
                <option value="0">KOTA STASIUN</option>
                <?php foreach ($kota as $value): ?>
                  <option value="<?= $value['id'] ?>" <?= $stasiun['is_kota'] == $value['id'] ? 'selected' : null ?> ><?= $value['nama_stasiun'] ?></option>
                <?php endforeach ?>
              </select>
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