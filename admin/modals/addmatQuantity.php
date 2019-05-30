<div class="modal" tabindex="-1" role="dialog" id="addQuantity" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        <h3 class="modal-title">Add Material Quantity</h3>
								      </div>
								      <div class="modal-body">
								        <div class="row">
								              <input type="hidden" class="form-control" name="m_id" id="material">
								              <input type="hidden" class="form-control" name="p_id" id="p_id">
								              <input type="hidden" class="form-control" name="old_quantity" id="quant">
								              <input type="hidden" class="form-control" name="p_bleft" id="budget">
								              <input type="hidden" class="form-control" name="expense" id="expense">
								              <input type="hidden" class="form-control" name="m_name" id="m_name">

   
								          </div>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Material:</label>
								              <span style="display: inline-block; width: 25em;margin-left: 53px;"><input type="text" class="form-control" id="m_name" disabled="disabled"></span>
								            </div>
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Project:</label>
								              <span style="display: inline-block; width: 25em;margin-left: 60px;"><input type="text" class="form-control" id="p_name" disabled="disabled"></span>
								            </div>
								          </div>
								          <br>
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
								        <input type="submit" name="btnSubmit" class="btn btn-primary btn-md">
								        </div>
								    </div>
								  </div>
								</div>