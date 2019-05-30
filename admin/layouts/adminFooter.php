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

<!-- Script for Materials -->
		<script>
			$('#addMaterial').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var myid = button.data('pid')
			  var address = button.data('address')
			  var leftbudget = button.data('leftbudget')
			  var expense = button.data('expense')
			  var p_name = button.data('p_name')
			  var modal = $(this)
			  modal.find('.modal-body #project').val(myid)
			  modal.find('.modal-body #address').val(address)
			  modal.find('.modal-body #leftbudget').val(leftbudget)
			  modal.find('.modal-body #expense').val(expense)

			  modal.find('.modal-body #p_name').val(p_name)


			})
		</script>
		<script>
			$('#addQuantity').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var mid = button.data('mid')
			  var quantity = button.data('quantity')
			  var project = button.data('project')
			  var leftbudget = button.data('leftbudget')
			  var expense = button.data('expense')
			  var m_name = button.data('m_name')
			  var p_name = button.data('p_name')
			  var modal = $(this)
			  modal.find('.modal-body #material').val(mid)
			  modal.find('.modal-body #quant').val(quantity)
			  modal.find('.modal-body #p_id').val(project)
			  modal.find('.modal-body #budget').val(leftbudget)
			  modal.find('.modal-body #expense').val(expense)
			  modal.find('.modal-body #m_name').val(m_name)
			  modal.find('.modal-body #p_name').val(p_name)

			})
		</script>

		<script>
			$('#TransferMat').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var material = button.data('material')
			  var quantity = button.data('quantity')
			  var project = button.data('project')
			  var pname = button.data('pname')
			  var mname = button.data('mname')


			  var modal = $(this)
			  modal.find('.modal-body #material').val(material)
			  modal.find('.modal-body #quantity').val(quantity)
			  modal.find('.modal-body #project').val(project)
			  modal.find('.modal-body #pname').val(pname)
			  modal.find('.modal-body #mname').val(mname)


			})
		</script>
<!-- Script for Materials End-->

<!-- Script for Project-->
		<script>
			$('#projectTask').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var pname = button.data('pname')
			  var pid = button.data('pid')
			  var project = button.data('project')
			  var pname = button.data('pname')
			  var mname = button.data('mname')


			  var modal = $(this)
			  modal.find('.modal-body #pname').val(pname)
			  modal.find('.modal-body #pid').val(pid)
			  modal.find('.modal-body #project').val(project)
			  modal.find('.modal-body #pname').val(pname)
			  modal.find('.modal-body #mname').val(mname)


			})
		</script>

		<script>
			$('#deleteProjectType').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var typeid = button.data('typeid')
			  var tname = button.data('tname')


			  var modal = $(this)
			  modal.find('.modal-body #typeid').val(typeid)
			  modal.find('.modal-body #tname').val(tname)


			})
		</script>

		<script>
			$('#CompleteProject').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var p_id = button.data('p_id')
			  var p_name = button.data('p_name')
			  var p_type = button.data('p_type')
			  var p_address = button.data('p_address')
			  var p_start = button.data('p_start')
			  var p_budget = button.data('p_budget')
			  var p_expense = button.data('p_expense')
			  var p_foreman = button.data('p_foreman')
			  var p_target = button.data('p_target')
			  var p_end = button.data('p_end')

			  var modal = $(this)
			  modal.find('.modal-body #p_id').val(p_id)
			  modal.find('.modal-body #p_name').val(p_name)
			  modal.find('.modal-body #p_type').val(p_type)
			  modal.find('.modal-body #p_address').val(p_address)
			  modal.find('.modal-body #p_start').val(p_start)
			  modal.find('.modal-body #p_budget').val(p_budget)
			  modal.find('.modal-body #p_expense').val(p_expense)
			  modal.find('.modal-body #p_foreman').val(p_foreman)
			  modal.find('.modal-body #p_target').val(p_target)
			  modal.find('.modal-body #p_end').val(p_end)



			})
		</script>

		<script>
			$('#projectAddDays').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) 
			  var pid = button.data('pid')
			  var pname = button.data('pname')
			  var pbudget = button.data('pbudget')
			  var pexpense = button.data('pexpense')



			  var modal = $(this)
			  modal.find('.modal-body #pid').val(pid)
			  modal.find('.modal-body #pname').val(pname)
			  modal.find('.modal-body #pbudget').val(pbudget)
			  modal.find('.modal-body #pexpense').val(pexpense)
			  

			})
		</script>
<!-- Script for Project End-->

<!-- Script for Equipment-->
	<script>
		$('#transferEquipment').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var eid = button.data('eid')
			var name = button.data('name')
			var location = button.data('location')

			var modal = $(this)
			modal.find('.modal-body #eid').val(eid)
			modal.find('.modal-body #name').val(name)
			modal.find('.modal-body #location').val(location)
			})
	</script>

	<script>
		$('#deployEquipment').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var eid = button.data('eid')
			var name = button.data('name')

			var modal = $(this)
			modal.find('.modal-body #eid').val(eid)
			modal.find('.modal-body #name').val(name)
			})
	</script>

	<script>
		$('#requestShow').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var type = button.data('type')
			var id = button.data('id')
			var uid = button.data('uid')
			var date = button.data('date')
			var description = button.data('description')

			var modal = $(this)
			modal.find('.modal-body #type').val(type)
			modal.find('.modal-body #id').val(id)
			modal.find('.modal-body #uid').val(uid)
			modal.find('.modal-body #date').val(date)
			modal.find('.modal-body #description').val(description)


			})
	</script>
	<script>
		$('#showNotification').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var n_id = button.data('n_id')
			var n_type = button.data('n_type')
			var n_message = button.data('n_message')
			var u_fullname = button.data('u_fullname')

			var modal = $(this)
			modal.find('.modal-body #n_id').val(n_id)
			modal.find('.modal-body #n_type').val(n_type)
			modal.find('.modal-body #n_message').val(n_message)
			modal.find('.modal-body #u_fullname').val(u_fullname)

			})
	</script>
	<script>
		$('#showEquipment').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var eq_id = button.data('eq_id')
			var eq_name = button.data('eq_name')
			var eq_description = button.data('eq_description')
			var eq_purchase_date = button.data('eq_purchase_date')
			var eq_purchase_price = button.data('eq_purchase_price')
			var eq_status = button.data('eq_status')
			var p_name = button.data('p_name')

			var modal = $(this)
			modal.find('.modal-body #eq_id').val(eq_id)
			modal.find('.modal-body #eq_name').val(eq_name)
			modal.find('.modal-body #eq_description').val(eq_description)
			modal.find('.modal-body #eq_purchase_date').val(eq_purchase_date)
			modal.find('.modal-body #eq_purchase_price').val(eq_purchase_price)
			modal.find('.modal-body #eq_status').val(eq_status)
			modal.find('.modal-body #p_name').val(p_name)

			})
	</script>
	<script>
		$('#addExpense').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var p_id = button.data('p_id')
			var p_expense = button.data('p_expense')
			var p_bleft = button.data('p_bleft')

			var modal = $(this)
			modal.find('.modal-body #p_id').val(p_id)
			modal.find('.modal-body #p_expense').val(p_expense)
			modal.find('.modal-body #p_bleft').val(p_bleft)
			})
	</script>

<!-- Script for Equipment End-->
		</section>
	</body>
</html>