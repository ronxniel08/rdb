<div class="modal" tabindex="-1" role="dialog" id="TransferMat" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        <h3 class="modal-title">Transfer Material</h3>
								      </div>
								      <div class="modal-body">
								        <div class="row">
								              <input type="hidden" class="form-control" name="m_id" id="material">
								              <input type="hidden" class="form-control" name="p_id" id="project">
								              <input type="hidden" class="form-control" name="m_quantity" id="quantity">
								              <input type="hidden" class="form-control" name="p_name" id="pname">
								              <input type="hidden" class="form-control" name="m_name" id="mname">
								              <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Material:</label>
								              <span style="display: inline-block; width: 25em;margin-left: 60px;"><input type="text" class="form-control" id="mname" disabled="disabled"></span>
								            </div>
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Quantity Left:</label>
								              <span style="display: inline-block; width: 25em;margin-left: 18px;"><input type="text" class="form-control" id="quantity" disabled="disabled"></span>
								            </div>
								          </div>
								          
								          <div class="row">
								            <div class="form-group col-md-8">
								              <label>Quantiy:</label>
								              <input type="number" class="form-control" name="tr_quant" required="required">
								            </div>
								          </div>

										<?php 
										$query = "SELECT * FROM tbl_projects WHERE p_id!=0"; 
										$result = mysqli_query($conn,$query);
										$option = "";
										while ($row = mysqli_fetch_array($result)) {
											$option = $option."<option value =' $row[0]'>$row[1]</option>";
										}

											?>
								          <div class="row">
								            <div class="form-group col-md-8">
								              <label>Project:</label>
								              <select name="new_pid" class="form-control" required="required">
												<option value="">Please Select One</option>
												<?php echo $option; ?>
											</select>
								            </div>
								          </div>
								          
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
								        <input type="submit" name="btnSubmit" value="Transfer Material" class="btn btn-primary btn-md">
								        </div>
								    </div>
								  </div>
								</div>