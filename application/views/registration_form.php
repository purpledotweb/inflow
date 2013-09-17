
<div id="center">
	
	<div id="content">
		<form action="registered" method="post">
			<label>Phone nr:</label><br />
			<input type="text" name="student_phone" value="<?php if(isset($info['student_phone'])) { echo $info['student_phone']; } else { echo ''; } ?>"><br />
			<label>Name:</label><br />
			<input type="text" name="student_name" value="<?php if(isset($info['student_name'])) { echo $info['student_name']; } else { echo ''; } ?>"><br />
			<label>Degree:</label><br />
			<input type="text" name="student_degree" value="<?php if(isset($info['student_degree'])) { echo $info['student_degree']; } else { echo ''; } ?>"><br />

			<?php if (isset($selected_courses)): ?>
				<?php foreach($selected_courses as $key => $value): ?>
					<input type="checkbox" name="<?php echo $key; ?>" <?php if ($value == 1){ echo 'checked';} ?>/><?php echo $key; ?><br />
				<?php endforeach; ?>
			<?php elseif (isset($default_courses)): ?>
				<?php foreach($default_courses as $course): ?>
					<input type="checkbox" name="<?php echo $course; ?>"/><?php echo $course; ?><br />
				<?php endforeach; ?>
			<?php else: ?>
				<p>Error: No course variable set!</p>
			<?php endif; ?>
			<input type="submit" value="Register">
		</form>
	</div>

</div>	