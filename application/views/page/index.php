      <!-- Booking section
      ================================================== -->

      <div class="container marketing">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <button type="button" id="hidden" class="btn btn-outline-info float-right text-white">Ganti Pencarian</button>
            <h3> Pemesanan Tiket Kereta Api </h3>
            <p id="date"></p>
          </div>

          <div id="card-body" class="card-body bg-dark text-white">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="stasiun_asal">Stasiun Asal</label>
                <select name="stasiun_asal" id="stasiun_asal" class="form-control">
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
              </div>

              <div class="col-md-6 form-group">
                <label for="stasiun_tujuan">Stasiun Tujuan</label>
                <select name="stasiun_tujuan" id="stasiun_tujuan" class="form-control">
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
              </div>

              <div class="col-md-3 form-group">
                <label class="text-white" for="tanggal">Tanggal Keberangkatan</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="mdi mdi-calendar-clock"></i></div>
                  </div>
                  <input type="date" id="tanggal" name="tanggal" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" class="form-control">
                </div>
              </div>

              <div class="col-md-3 form-group">
                <label for="dewasa">Dewasa</label>
                <input id="dewasa" name="dewasa" type="number" min="1" max="4" value="1" class="form-control">
              </div>

              <div class="col-md-3 form-group">
                <label for="bayi">Bayi <small>(< 3 tahun)</small></label>
                <input id="infant" name="bayi" type="number" min="0" max="4" value="0" class="form-control">
                <small><span class="text-danger">*</span> Tidak bisa melebihi penumpang dewasa</small>
              </div>

            </div>
            <button type="submit" onclick="searchJadwalTiket()" class="btn btn-warning">Cari & Pesan Tiket</button>
          </div>
        </div>

      <hr>
      </div>
      <!-- /.container -->

      <div class="container">
        <div id="container-table" class="table-responsive">
          <table id="datajadwal" class="table table-hover table-bordered">
            <thead class="bg-primary text-white text-center">
              <tr>
                <th>Kereta</th>
                <th>Berangkat</th>
                <th>Tiba</th>
                <th>Harga</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <script type="text/javascript">
        $(document).ready(function() {
          loadData();
        });
      </script>

      <script type="text/javascript">
        function searchJadwalTiket() {
          var asal    = $("#stasiun_asal").val();
          var tujuan  = $("#stasiun_tujuan").val();

          $.ajax({
            type  :'GET',
            url   :'<?= base_url('index/searchJadwalTiket') ?>',
            data  :'asal=' + asal + '&tujuan=' + tujuan,
            success:function(html) {
              $("#datajadwal").html(html);
              $("#container-table").show(); // Menampilkan tabel Jadwal Tiket
            }
          });
        }
      </script>