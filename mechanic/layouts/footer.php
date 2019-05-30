	<!-- Vendor -->
			<script src="../assets/vendor/jquery/jquery.js"></script>
			<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
			<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
			<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
			<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
			<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
			
			<!-- Specific Page Vendor -->
			
			<!-- Theme Base, Components and Settings -->
			<script src="../assets/javascripts/theme.js"></script>
			
			<!-- Theme Custom -->
			<script src="../assets/javascripts/theme.custom.js"></script>
			
			<!-- Theme Initialization Files -->
			<script src="../assets/javascripts/theme.init.js"></script>
			<script src="../assets/javascripts/ui-elements/examples.modals.js"></script>
			<script src="{{asset('js/app.js')}}"></script>


<!-- Script for Equipment-->
<script>
	$('#changeStatusGood').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) 
	var eq_id = button.data('eq_id')
	var eq_status = button.data('eq_status')
	var eq_name = button.data('eq_name')
	var p_name = button.data('p_name')
	var p_address = button.data('p_address')
	var user = button.data('user')
	
	var modal = $(this)
	modal.find('.modal-body #eq_id').val(eq_id)
	modal.find('.modal-body #eq_status').val(eq_status)
	modal.find('.modal-body #eq_name').val(eq_name)
	modal.find('.modal-body #p_name').val(p_name)
	modal.find('.modal-body #p_address').val(p_address)
	modal.find('.modal-body #user').val(user)
	})
</script>
<script>
	$('#changeStatusRepair').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) 
	var eq_id = button.data('eq_id')
	var eq_status = button.data('eq_status')
	var eq_name = button.data('eq_name')
	var p_name = button.data('p_name')
	var p_address = button.data('p_address')
	var user = button.data('user')

	
	var modal = $(this)
	modal.find('.modal-body #eq_id').val(eq_id)
	modal.find('.modal-body #eq_status').val(eq_status)
	modal.find('.modal-body #eq_name').val(eq_name)
	modal.find('.modal-body #p_name').val(p_name)
	modal.find('.modal-body #p_address').val(p_address)
	modal.find('.modal-body #user').val(user)

	})
</script>

<script>
	$('#showNotif').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) 
	var n_id = button.data('n_id')
	var n_type = button.data('n_type')
	var n_message = button.data('n_message')

	
	var modal = $(this)
	modal.find('.modal-body #n_id').val(n_id)
	modal.find('.modal-body #n_type').val(n_type)
	modal.find('.modal-body #n_message').val(n_message)

	})
</script>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<!-- Script for Equipment-->

		</section>
	</body>
</html>