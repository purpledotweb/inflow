
<div id="center">
	
	<div id="content">

		<form action="sms_sent" method="post">
			<label><b>To Group:</b></label><br />
				<select name="group"> 

				<?php foreach($Name as $val) {	
				echo  '<option value="'.$val['Name'].'">'.$val['Name'].'</option>';

				} 
				 ?>
				</select><br /><br />

			<label><b>Your Message :</b></label><br />
			<textarea name="message" wrap="off" cols="53" rows="7">Report to office ASAP
			</textarea><br />

			<input type="submit" value="Send Message">
		</form>
			
	</div>

</div>	