

<div id="center">
	
	<div id="content">
		<?php
			$groups=unserialize($groups);
			echo '<i>User</i> '.$Name.'<i> was created and added in groups:</i><br>';
				foreach ($groups as $val) {
					echo $val.',<br> ';
				}
			; 
			
		?>
			<a href="http://localhost/inflow/index.php/student/send_sms"><button>Send A Message</button></a>
	</div>

</div>	