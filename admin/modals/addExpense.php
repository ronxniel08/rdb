<div class="modal" tabindex="-1" role="dialog" id="addExpense" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        
								        <h3 class="modal-title">Add Expense</h3>
								          
								      </div>
								      <div class="modal-body">
								          <div class="row">
								          	<input type="hidden" name="p_id" id="p_id">
								          	<input type="hidden" name="p_bleft" id="p_bleft">
								          	<input type="hidden" name="p_expense" id="p_expense">
								            <div class="form-group col-md-11">
								              <label>Expense Type</label>
								              <input type="text" class="form-control" name="exType" required="required">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label>Description:</label>
								              <input type="text" class="form-control" name="description" required="required">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label>Price:</label>
								              <input type="number" class="form-control" name="price" required="required">
								            </div>
								          </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
								        <input type="submit" name="btnSubmit" class="btn btn-primary btn-md">
								        </div>
								    </div>
								  </div>
								</div>