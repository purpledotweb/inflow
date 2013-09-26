<div id="admin">
			<div id="content">
				<a href="http://localhost/inflow/index.php/sms/send_sms"><button>Send A Message</button></a><br>
				<a href="http://localhost/inflow/index.php/admin/create_users"> <button value="Add Staff Members">Add Staff Members</button></a><br>
				<a href="http://localhost/inflow/index.php/admin/create_groups"> <button value="Add A Group">Add A Group</button></a><br>
			</div>
		</div>	

<div id="center">
	
	<div id="content">


		<form action="sms_sent" method="post">

			<label><b>Your Message :</b></label><br />
			<textarea name="message" wrap="off" cols="53" rows="7">Report to office ASAP
			</textarea><br />
				<h4><p>groups to send to:</p></h4>

				<?php foreach($Name as $val) {	
					echo  '<input type="checkbox" name="groups" value="'.$val['Name'].'">'.$val['Name'].'&nbsp &nbsp &nbsp &nbsp ';
					} 
				?>
				<br><br>
			<input type="submit" value="Send Message">
		</form>
		<hr>
		<div id="recipients">
			<i>Recipient ...</i>
		</div>	

			
	</div>

</div>	