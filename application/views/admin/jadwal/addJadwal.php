<div class="container-fluid">
  <div class="alert alert-info" role="alert">
    <strong><i class="mdi mdi-information-outline"></i> Yang diberi tanda (*) harus diisi.</strong>
  </div>

  <a href="<?= base_url('admin/jadwal') ?>" class="btn btn-warning my-2 text-white">
    <i class="mdi mdi-chevron-double-left"></i> Kembali
  </a>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <form action="<?= base_url('admin/jadwal/tambah') ?>" method="POST">
          <input type="hidden" name="id_jadwal" id="id_jadwal" value="<?= $uuid ?>">
          <div class="card-body col-lg-6">
            <div class="form-group">
              <label for="nama_kereta">Nama Kereta *</label>
                <select name="nama_kereta" id="nama_kereta" class="form-control select2">
                    <option value=""></option>
                    <?php foreach ($kereta as $value): ?>
                      <option value="<?= $value['id'] ?>"><?= $value['nama_kereta'] . ' ('.$value['tipe_kereta'].')' ?></option>
                    <?php endforeach ?>
                </select>
              <strong class="text-danger"><?= form_error('nama_kereta') ?></strong>
            </div>
            <div class="form-group">
              <label for="stasiun_asal">Stasiun Asal *</label>
                <select name="stasiun_asal" id="stasiun_asal" class="form-control select2">
                  <option value=""></option>
                  <?php 
                    $optgroups = $this->db->get_where('stasiun', ['is_kota' => 0])->result();

                    if (!empty($optgroups)) {
                      foreach ($optgroups as $optgroup) {
                        $options =  $this->db->get_where('stasiun', ['is_kota' => $optgroup->id]);

                        if ($options->num_rows() > 0) {
                          echo "<optgroup label='$optgroup->nama_stasiun'>";

                          foreach ($options->result() as $option) {
                            echo "<option value='$option->id'> $option->nama_stasiun ($option->kode_stasiun) </option>";
                          }
                          echo "</optgroup>";

                        } else {
                          echo "";
                        }
                      }

                    } else {
                      echo "";
                    }
                  ?>
                </select>
              <strong class="text-danger"><?= form_error('stasiun_asal') ?></strong>
            </div>
            <div class="form-group">
              <label for="stasiun_tujuan">Stasiun Tujuan *</label>
                <select name="stasiun_tujuan" id="stasiun_tujuan" class="form-control select2">
                  <option value=""></option>
                  <?php 
                    $optgroups = $this->db->get_where('stasiun', ['is_kota' => 0])->result();

                    if (!empty($optgroups)) {
                      foreach ($optgroups as $optgroup) {
                        $options =  $this->db->get_where('stasiun', ['is_kota' => $optgroup->id]);

                        if ($options->num_rows() > 0) {
                          echo "<optgroup label='$optgroup->nama_stasiun'>";

                          foreach ($options->result() as $option) {
                            echo "<option value='$option->id'> $option->nama_stasiun ($option->kode_stasiun) </option>";
                          }
                          echo "</optgroup>";

                        } else {
                          echo "";
                        }
                      }

                    } else {
                      echo "";
                    }
                  ?>
                </select>
              <strong class="text-danger"><?= form_error('stasiun_tujuan') ?></strong>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal Berangkat *</label>
              <input type="date" name="tanggal" id="tanggal" class="form-control" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>">
              <strong class="text-danger"><?= form_error('tanggal') ?></strong>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="waktu_berangkat">Waktu Berangkat *</label>
                <input type="time" name="waktu_berangkat" id="waktu_berangkat" class="form-control" value="<?= date('h:i') ?>">
                <strong class="text-danger"><?= form_error('waktu_berangkat') ?></strong>
                <strong class="text-danger"><?= form_error('waktu_sampai') ?></strong>
              </div>
              <div class="form-group col-md-6">
                <label for="waktu_sampai">Waktu Sampai *</label>
                <input type="time" name="waktu_sampai" id="waktu_sampai" class="form-control" value="<?= date('h:i') ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="harga">Harga *</label>
              <input type="number" name="harga" id="harga" class="form-control" value="<?= set_value('harga') ?>">
              <strong class="text-danger"><?= form_error('harga') ?></strong>
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