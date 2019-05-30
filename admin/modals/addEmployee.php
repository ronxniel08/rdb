<div class="modal" tabindex="-1" role="dialog" id="addEmployee" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        
								        <h3 class="modal-title">New Employee</h3>
								          
								      </div>
								      <div class="modal-body">
								          <br>
								          <div class="row">
								            <div class="form-group col-md-5">
								              <label>FirstName:</label>
								              <input type="text" class="form-control" name="fname" required="required">
								            </div>
								            <div class="form-group col-md-2">
								              <label>M.I:</label>
								              <input type="text" class="form-control" name="mname" required="required" maxlength="1">
								            </div>
								            <div class="form-group col-md-5">
								              <label>LastName:</label>
								              <input type="text" class="form-control" name="lname" required="required">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-12">
								              <label>Address:</label>
								              <input type="text" class="form-control" name="address" required="required">
								            </div>
								          </div>
								          <br>
								          <div class="row">
								            <div class="form-group col-md-8">
								              <label>Position:</label>
								              <select class="form-control" name="position" required="required">
								                	<option value="">Please Select One</option>
								                	<option value="Foreman">Foreman</option>
								                	<option value="Mechanic">Mechanic</option>
								                </select>
								            </div>
								          </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
								        <input type="submit" name="btnSubmit" value="Add Employee" class="btn btn-primary btn-md">
								        </div>
								    </div>
								  </div>
								</div>