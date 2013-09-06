<h1>Inflow Registration Page</h1>
<?php
echo '<pre>';
var_dump($courses);
echo '<pre>';
 ?>
<form action="welcome" method="post">
	<label>Phone nr:</label><br />
	<input type="text" name="student_phone" value="<?php if(isset($info['student_phone'])) { echo $info['student_phone']; } else { echo ''; } ?>"><br />
	<label>Name:</label><br />
	<input type="text" name="student_name" value="<?php if(isset($info['student_name'])) { echo $info['student_name']; } else { echo ''; } ?>"><br />
	<label>Degree:</label><br />
	<input type="text" name="student_degree" value="<?php if(isset($info['student_degree'])) { echo $info['student_degree']; } else { echo ''; } ?>"><br />

		<?php foreach($courses as $key => $value): ?>
			<input type="checkbox" name="course[]" value="<?php echo $value ?>" <?php if ($value == 1){ echo 'checked';} ?>/><?php echo $key ?><br />
		<?php endforeach; ?>

	<input type="submit" value="Register">
</form>