<div class="modal modal-block " tabindex="-1" role="dialog" id="myProject" style="margin-top: -200px;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
								      <div class="modal-header" style="background-color: cyan">
								        
								        <h3 class="modal-title">Add Project</h3>
								          
								      </div>
								      <div class="modal-body">
								        <div class="row">
								            <div class="form-group col-md-12">
								              <label>Project Name:</label>
								              <input type="text" class="form-control" name="p_name" placeholder="e.g Farm to Market Road">
								            </div>
								          </div>

								          <?php 
										$queryTypes = "SELECT * FROM tbl_project_types WHERE pt_status ='Enabled'"; 
										$resultTypes = mysqli_query($conn,$queryTypes);
										$optionTypes = "";
										while ($row2 = mysqli_fetch_array($resultTypes)) {
											$optionTypes = $optionTypes."<option value =' $row2[0]'>$row2[1]</option>";
										}

										

											?>

											
								          <div class="row">
								              <div class="form-group col-md-12">
								                <label>Type of Project:</label>
								                <select class="form-control" name="p_type" required="required">
								                	<option value="">Type of Project</option>
								                	<?php echo $optionTypes; ?>
								                </select>
								              </div>
								          </div>
								          <div class="row">
								             <div class="form-group col-md-12">
								                <label>Address:</label>
								                <input type="text" class="form-control" name="p_address" placeholder="Site Address">
								              </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label>Start Date:</label>
								              <input type="date" class="form-control" name="p_start">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-6">
								              <label for="Goal Score">End Date:</label>
								              <input type="date" class="form-control" name="p_end">
								            </div>
								          </div>

								          <?php 
										$query = "SELECT * FROM tbl_users WHERE u_type = '2' AND u_site = '0' "; 
										$result = mysqli_query($conn,$query);
										$option = "";
										while ($row = mysqli_fetch_array($result)) {
											$option = $option."<option value =' $row[0]'>$row[1]</option>";
										}

											?>
								          <div class="row">
								            <div class="form-group col-md-12">
								              <label>Foreman:</label>
								                <select class="form-control" name="p_foreman">
								                	<option value=""><----------------------------------------------------------------></option>
								                	
								                	<?php echo $option; ?>
								                	
								                </select>
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-12">
								              <label>Budget:</label>
								              <input type="currency" class="form-control" name="p_budget" placeholder="Php">
								            </div>
								          </div>
								          <div class="row">
								            <div class="form-group col-md-12">
								            <label>Description:</label>
								              <input type="textarea" class="form-control" name="p_description" placeholder="Short Description">
								            </div>
								          </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
								        <input type="submit" name="btnSubmit" class="btn btn-primary btn-sm" value="Add Project">
								        </div>
								    </div>
								  </div>
								</div>