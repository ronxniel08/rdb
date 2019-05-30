<div class="modal" tabindex="-1" role="dialog" id="requestShow" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        <h3 class="modal-title">Request</h3>
								      </div>
								      <div class="modal-body">
								        <div class="row">
								        	<input type="hidden" class="form-control" name="id" id="id">
								          </div>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label>Type of Request:</label>
								              <input type="text" class="form-control" name="type" id="type" disabled="disabled">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label>Request By:</label>
								              <input type="text" class="form-control" name="uid" id="uid" disabled="">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label>Date</label>
								              <input type="text" class="form-control" name="date" id="date" disabled="disabled">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-12">
								              <label>Description</label>
								              <textarea id="description" class="form-control" disabled="disabled"></textarea>
								            </div>
								          </div>
								      </div>
								      <div class="modal-footer">
								      	<input type="submit" name="btnApproved" class="btn btn-success btn-md" value="Approve">
								        <input type="submit" name="btnSubmit" class="btn btn-primary btn-md" value="Close">
								        </div>
								    </div>
								  </div>
								</div>