<div id="admin">
	<div id="content">
		<a href="http://localhost/inflow/index.php/sms/send_sms"><button>Send A Message</button></a><br>
		<a href="http://localhost/inflow/index.php/admin/create_users"> <button value="Add Staff Members">Add Staff Members</button></a><br>
		<a href="http://localhost/inflow/index.php/admin/create_groups"> <button value="Add A Group">Add A Group</button></a><br>
	</div>
</div>
<div id="center">
	
	<div id="content">
			

		<form action="user_created" method="post">
			<label><b>Staff Name:</b></label><br />
			<input type="text" name="name"></input>
				<br /><br />

			<label><b>Staff Phone Number:</b></label><br />
			<input type="text" name="phone"></input>
				<br />	

			<label><b>In Groups:</b></label><br />	<br />	

			<?php foreach($Name as $val) {	
				echo  '<input type="checkbox" name="group[]" value="'.$val['Name'].'">'.$val['Name'].'<br>';
				} 
			?>

			<input type="submit" value="Add Member of Staff">
		</form>
	</div>
</div>	