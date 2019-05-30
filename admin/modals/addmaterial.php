<div class="modal" tabindex="-1" role="dialog" id="addMaterial" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        
								        <h3 class="modal-title">Add Material</h3>
								          
								      </div>
								      <div class="modal-body">
								        <div class="row">
								              <input type="hidden" class="form-control" name="p_id" id="project">
								              <input type="hidden" class="form-control" name="p_bleft" id="leftbudget">
								              <input type="hidden" class="form-control" name="expense" id="expense">

								          </div>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Project:</label>
								              <span style="display: inline-block; width: 25em;margin-left: 60px;"><input type="text" class="form-control" id="p_name" disabled="disabled"></span>
								            </div>
								          </div>
								          <br>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label>Material Name:</label>
								              <input type="text" class="form-control" name="m_name" required="required">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label>Quantiy:</label>
								              <input type="number" class="form-control" name="m_quantity" required="required">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label>Price:</label>
								              <input type="number" class="form-control" name="m_price" required="required">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-12">
								              <label>Description</label>
								              <input type="text" class="form-control" name="m_description" required="required">
								            </div>
								          </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
								        <input type="submit" name="btnSubmit" value="Add Material" class="btn btn-primary btn-md">
								        </div>
								    </div>
								  </div>
								</div>