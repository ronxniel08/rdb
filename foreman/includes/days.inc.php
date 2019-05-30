<?php if ($daysLeft<="1") {
					$notifDays = "<h4 style='color: red;'>Construction Is Not On Track!!!</h4>
											<p>Notify Engineer Click  <button type='button'class='btn btn-success btn-xs' data-toggle='modal' data-p_name='$p_name' data-p_id='$p_id' data-p_type='$p_type' data-p_address='$p_address' data-p_start='$p_start' data-p_budget='$p_budget' data-p_expense='$p_expense' id='task' data-target='#notify'><i class='fa fa-paper-plane'></i> Here</button></p>
											";
				}else{
					$notifDays = "<h4> Construction in Progress...</h4>


					";
				}
 ?>