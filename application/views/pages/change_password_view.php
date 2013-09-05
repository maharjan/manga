<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">

	<div id="inner_panel">
		<h1>Change your login password</h1>
		<?php echo form_open($form_action)
		?>
		<!-- <p>

			<div class="error">
				<label> <?php $global_error; ?> </label>
			</div>
		</p> -->
		<p>
			<?php
			echo form_label('Old Password:', 'old_password');

			$old_password = array('name' => 'old_password', 'id' => 'old_password', 'minlength' => '6', 'maxlength' => '32', 'title' => 'Your old password.', 'value' => "", 'autocomplete' => "off", 'required' => 'required');

			echo form_password($old_password);
			echo form_error('old_password', '<div class="error">', '</div>');
			?>
		</p>

		<p>
			<?php
			echo form_label("New Password:", 'new_password');

			$new_password = array('name' => 'new_password', 'id' => 'new_password', 'minlength' => '6', 'maxlength' => '32', 'title' => 'New Password must be at least six characters long.', 'value' => "", 'autocomplete' => "off", 'required' => 'required');

			echo form_password($new_password);
			echo form_error('new_password', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Confirm New Password:", 'confirm_new_password');

			$confirm_new_password = array('name' => 'confirm_new_password', 'id' => 'confirm_new_password', 'minlength' => '6', 'maxlength' => '32', 'title' => 'Confirm Password must be at least six characters long.', 'value' => "", 'autocomplete' => "off", 'required' => 'required');

			echo form_password($confirm_new_password);
			echo form_error('confirm_new_password', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<label></label>
		</p>
		<p>
			<?php echo form_submit('submit', 'Change ?'); ?>
		</p>
		<?php echo form_close(); ?>
	</div>
</div>