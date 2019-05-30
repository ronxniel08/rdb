<div class="modal" tabindex="-1" role="dialog" id="notificationShow" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        
								        <h3 class="modal-title">Equipment Repaired?</h3>
								          
								      </div>
								      <div class="modal-body">
								        <div class="row">
								              <input type="hidden" class="form-control" name="eq_id" id="eqid">
								              <input type="hidden" class="form-control" name="eq_name" id="eqname">
								              <input type="hidden" class="form-control" name="eq_status" id="eqstatus">

								          </div>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Equipment:</label>
								              <span style="display: inline-block; width: 22em;margin-left: 50px;"><input type="text" class="form-control" id="eqname" disabled="disabled"></span>
								            </div>
								          </div>
								          <br>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Current Status:</label>
								              <span style="display: inline-block; width: 22em;margin-left: 18px;"><input type="text" class="form-control" id="eqstatus" disabled="disabled"></span>
								            </div>
								          </div>
								          <br>
								          <div class="row">
								          	<div class="col-md-9">
								          	</div>
								          	<div class="col-md-3">
								          		<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="width: 50px;">No</button>
								        	<input type="submit" name="btnSubmit" class="btn btn-danger btn-sm" value="Yes" style="width: 50px;">
								          	</div>
								          </div>
								    </div>
								  </div>
								</div>