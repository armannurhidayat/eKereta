<table id="datajadwal" class="table table-hover table-bordered">
  <thead class="bg-primary text-white text-center">
    <tr>
      <th>Kereta</th>
      <th>Berangkat</th>
      <th>Durasi</th>
      <th>Tiba</th>
      <th>Harga</th>
    </tr>
  </thead>

  <tbody align="center">
    <?php foreach ($jadwal->result_array() as $value): ?>
      <tr>
        <td>
          <?= '<strong>' . $value['nama_kereta'] . '</strong><br>' ?>
          <?= '(' . $value['tipe_kereta'] . ')' ?>
        </td>

        <td>
          <?= $value['asal'] ?>
          <?= '<br><strong>' . $value['waktu_berangkat'] . '</strong><br>' ?>
          <?= $value['tanggal'] ?>
        </td>

        <td>Durasi</td>

        <td>
          <?= $value['tujuan'] ?>
          <?= '<br><strong>' . $value['waktu_sampai'] . '</strong><br>' ?>
          <?= $value['tanggal'] ?>
        </td>

        <td>
          <?= 'Rp.' . $value['harga'] ?><br>
          <a href="<?= base_url() ?>" class="btn btn-warning btn-sm">Pesan</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>