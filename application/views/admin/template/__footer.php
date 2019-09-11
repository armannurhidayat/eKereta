<footer class="footer text-center">
  All Rights Reserved by Matrix-admin.
</footer>

  </div>
</div>

<script src="<?= base_url('assets') ?>/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url('assets') ?>/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url('assets') ?>/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url('assets') ?>/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url('assets') ?>/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url('assets') ?>/dist/js/custom.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/select2/dist/js/select2.min.js"></script>
<!-- Datatable -->
<script src="<?= base_url('assets') ?>/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?= base_url('assets') ?>/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?= base_url('assets') ?>/extra-libs/DataTables/datatables.min.js"></script>

<script type="text/JavaScript">
	$(document).ready(function(){
	 	$('#zero_config').DataTable();

		$(".select2").select2({
			placeholder: "- Pilih -"
		});
	});
</script>

  </body>
</html>