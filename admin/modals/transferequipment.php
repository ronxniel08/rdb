<div class="modal" tabindex="-1" role="dialog" id="transferEquipment" style="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="alert alert-danger" style="display:none">
			</div>
				<div class="modal-header" style="background-color: cyan">
								        
								        <h3 class="modal-title">Transfering of Equipment</h3>
								          
								      </div>
								      <div class="modal-body">
								      	<input type="hidden" class="form-control" name="e_id" id="eid">
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 18px;">Equipment:</label>
								              <span style="display: inline-block; width: 22em;margin-left: 60px;"><input type="text" class="form-control" name="name" id="name" disabled="disabled"></span>
								            </div>
								          </div>
								          <br>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label style="font-weight: bolder;font-size: 16px;">Current Location:</label>
								              <span style="display: inline-block; width: 22em;margin-left: 2em;"><input type="text" class="form-control" name="description" id="location"  disabled="disable></span>
								              	d">
								            </div>
								          </div>
								          <br>
								          <?php 
											$query = "SELECT * FROM tbl_projects WHERE p_id !='0' "; 
											$result = mysqli_query($conn,$query);
											$optionProject = "";
											while ($row2 = mysqli_fetch_array($result)) {
												$optionProject = $optionProject."<option value ='$row2[0]'>$row2[1] at $row2[3]</option>";
											}

											?>
								          <div class="row">
								            <div class="form-group col-md-11">
								              <label>New Location:</label>
								              <select class="form-control" name="project" required="required">

								                	<option value="" style="background-color: lightgray;">New Location</option>
								                	<option value="0">Return to RDB Garage</option>
								                	<?php echo $optionProject; ?>
								                </select>
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