<div id="center">
	
	<div id="content">
		<?php

			

			if (isset($phone)){
				echo 'Message: <br> <i>"'.$message.'"</i><br>'; 
				foreach($phone as $val) {

					echo 'Was just sent to <b>'.$val.'</b><br>';
				}

			}

			else echo "There are no recipients in the group ".$group;
		?>

	</div>

</div>	