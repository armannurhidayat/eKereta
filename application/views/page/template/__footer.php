
      <!-- FOOTER -->
      <footer class="container">
        <p>&copy; 2019 Company, Inc.</p>
      </footer>

    </main>


    <!-- Date -->
    <script type="text/javascript">
      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var thisDay = date.getDay(), thisDay = myDays[thisDay];
      var yy = date.getYear();
      var year = (yy < 1000) ? yy + 1900 : yy;
      document.getElementById('date').innerHTML=thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?= base_url('assets') ?>/libs/jquery/dist/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/bootstrap/dist/js/popper.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/bootstrap/dist/js/holder.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets') ?>/dist/js/custom.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/select2/dist/js/select2.min.js"></script>

    

    <script type="text/javascript">
      $(document).ready(function() {
        $("#stasiun_asal").select2({
          placeholder: "- Pilih -"
        });

        $("#stasiun_asal").select2({
          placeholder: "Stasiun Asal..."
        });

        $("#stasiun_tujuan").select2({
          placeholder: "Stasiun Tujuan..."
        });

        $("#hidden").on('click', function() {
          $("#card-body").slideToggle();
        });

        //Hide Tabel Jadwal Tiket
        $('#container-table').hide();

      });
    </script>


    <script type="text/javascript">
      $(function() {
        //set max value and min value for passenger
        $('#dewasa').on('change keyup', function() {
            $('#infant').attr('max', $(this).val());
            //set infant number to 0
            if( Number($('#infant').val()) > Number($(this).val()) ) {
                $('#infant').val('0');
            }
        });

      });
    </script>

  </body>
</html>
