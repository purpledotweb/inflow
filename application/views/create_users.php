
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