<h1>Inflow Registration Page</h1>

<form action="registration_script" method="post">
	<label>Phone nr:</label><br />
	<input type="text" name="student_phone" value="<?php if(isset($student_phone)) { echo $student_phone; } else { echo ''; } ?>"><br />
	<label>Name:</label><br />
	<input type="text" name="student_name" value="<?php if(isset($student_name)) { echo $student_name; } else { echo ''; } ?>"><br />
	<label>Degree:</label><br />
	<input type="text" name="student_degree" value="<?php if(isset($student_degree)) { echo $student_degree; } else { echo ''; } ?>"><br />
	<input type="checkbox" name="course[]" value="course1" /> Course 1<br />
	<input type="checkbox" name="course[]" value="course2" /> Course 2<br />
	<input type="checkbox" name="course[]" value="course3" /> Course 3<br />
	<input type="checkbox" name="course[]" value="course4" /> Course 4<br />
	<input type="checkbox" name="course[]" value="course5" /> Course 5<br />
	<input type="submit" value="Register">
</form>