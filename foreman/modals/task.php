<div class="modal modal-block " tabindex="-1" role="dialog" id="task" style="margin-top: -400px;margin-left: 200px">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
								      <div class="modal-header" style="background-color: cyan">
								        
								        <h3 class="modal-title">Complete This Task?</h3>
								          
								      </div>
								      <div class="modal-body">
								        
								          <div class="row">
								             <div class="form-group col-md-10">
								                <input type="hidden" class="form-control" name="t_id" id="t_id">
								                <input type="hidden" class="form-control" name="t_name" id="t_name">
								                <input type="hidden" class="form-control" name="t_pid" id="t_pid">
								                <input type="hidden" class="form-control" name="p_foreman" id="p_foreman">
								                <input type="hidden" class="form-control" name="p_name" id="p_name">
								                <input type="hidden" class="form-control" name="p_address" id="p_address">

								                <label class="h4">Task Name:</label>
								                <span style="display: inline-block;">
								                <input type="text" class="form-control" name="t_name" id="t_name" disabled="disabled" style="width: 20em">
								                </span>
								              </div>
								          </div>
								          <br>

								          <div class="row">
								             <div class="form-group col-md-12">
								             	<label class="h4">Please Upload a Photo Proof:</label>
								              <br>
								              
								              	<img src="../img/noimage.png" width="500" height="200" id="image-field">
								              </div>
								          </div>
								          <br>
								          <div class="row">
								             <div class="form-group col-md-6">
								              </div>
								              <div class="form-group col-md-2">
								              	<input type="file" name="photo" id="file-field" required="required" onchange="previewImage(event)">
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
								</div>