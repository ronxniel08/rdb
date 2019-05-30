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
			<script type="text/javascript">
				function previewImage(event){
					var reader = new FileReader();
					var imageField = document.getElementById("image-field")
					reader.onload = function(){
						if (reader.readyState == 2) {
							imageField.src = reader.result;
						}
					}
					reader.readAsDataURL(event.target.files[0]);

				}
			</script>
			<script>
			$('#task').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var t_id = button.data('t_id')
			  var t_name = button.data('t_name')
			  var t_pid = button.data('t_pid')
			  var p_foreman = button.data('p_foreman')
			  var p_name = button.data('p_name')
			  var p_address = button.data('p_address')

			  var modal = $(this)
			  modal.find('.modal-body #t_id').val(t_id)
			  modal.find('.modal-body #t_name').val(t_name)
			  modal.find('.modal-body #t_pid').val(t_pid)
			  modal.find('.modal-body #p_foreman').val(p_foreman)
			  modal.find('.modal-body #p_name').val(p_name)
			  modal.find('.modal-body #p_address').val(p_address)


			})
		</script>

		<script>
			$('#taskphoto').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var t_name = button.data('t_name')
			  var photo = button.data('photo')

			  var modal = $(this)
			 
			  modal.find('.modal-body #t_name').val(t_name)
			  modal.find('.modal-body img').val(photo)



			})
		</script>
<script>
	$('#changeStatusGood').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) 
	var eq_id = button.data('eq_id')
	var eq_status = button.data('eq_status')
	var eq_name = button.data('eq_name')
	var p_name = button.data('p_name')
	var p_address = button.data('p_address')
	var u_id = button.data('u_id')
	
	var modal = $(this)
	modal.find('.modal-body #eq_id').val(eq_id)
	modal.find('.modal-body #eq_status').val(eq_status)
	modal.find('.modal-body #eq_name').val(eq_name)
	modal.find('.modal-body #p_name').val(p_name)
	modal.find('.modal-body #p_address').val(p_address)
	modal.find('.modal-body #u_id').val(u_id)
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
	var u_id = button.data('u_id')

	
	var modal = $(this)
	modal.find('.modal-body #eq_id').val(eq_id)
	modal.find('.modal-body #eq_status').val(eq_status)
	modal.find('.modal-body #eq_name').val(eq_name)
	modal.find('.modal-body #p_name').val(p_name)
	modal.find('.modal-body #p_address').val(p_address)
	modal.find('.modal-body #u_id').val(u_id)

	})
</script>
		</section>
	</body>
</html>