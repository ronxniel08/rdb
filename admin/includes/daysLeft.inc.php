<?php if ($daysLeft<="1") {
					$notifDays = "<h4 style='color: red;'>Construction Is Not On Track!!!</h4>
											<p>Do You Want to Days to Project? 
											<button type='button' class='btn btn-xs btn-danger' data-toggle='modal' data-pname='$p_name' data-pid='$p_id' data-pexpense='$p_expense' data-pbudget='$p_bleft' id='task' data-target='#projectAddDays'><i class='fa fa-plus'></i> Yes</button>

											<button type='button' class='btn btn-success btn-xs' data-toggle='modal' data-p_name='$p_name' data-p_id='$p_id'  data-p_type='$p_type' data-p_address='$p_address' data-p_start='$p_start' data-p_budget='$p_budget' data-p_expense='$p_expense' data-p_target='$p_target' data-p_end='$p_end' id='task' data-target='#CompleteProject'><i class='fa fa-archive'></i> No</button>";
				}else{
					$notifDays = "<h4>Construction in Progress...<button type='button'class='btn btn-success btn-xs' data-toggle='modal' data-p_name='$p_name' data-p_id='$p_id' data-p_type='$p_type' data-p_address='$p_address' data-p_start='$p_start' data-p_budget='$p_budget' data-p_expense='$p_expense' data-p_foreman='$p_foreman' data-p_target='$p_target' data-p_end='$p_end' id='task' data-target='#CompleteProject'><i class='fa fa-archive'></i> Finish</button></h4>


					";
				}
 ?>