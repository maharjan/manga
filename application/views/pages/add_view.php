<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">

	<div id="inner_panel">
		<h1>Add maNga</h1>

		<?php echo form_open($form_action)
		?>
		<p>
			<?php
            echo form_label("Name :", 'manga_name');

            $manga_name = array('name' => 'manga_name', 'id' => 'manga_name', 'type' => 'text', 'maxlength' => '255', 'placeholder' => 'One piece', 'value' => set_value('manga_name'), 'required' => 'required');
            echo form_input($manga_name);
            echo form_error('manga_name', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
            echo form_label("Author :", 'manga_author');

            $manga_author = array('name' => 'manga_author', 'id' => 'manga_author', 'type' => 'text', 'maxlength' => '255', 'placeholder' => 'Eichiro Oda', 'value' => set_value('manga_author'), 'required' => 'required');
            echo form_input($manga_author);
            echo form_error('manga_author', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
            echo form_label("Latest Chapter :", 'manga_recent_epi');

            $manga_recent_epi = array('name' => 'manga_recent_epi', 'id' => 'manga_recent_epi', 'type' => 'text', 'maxlength' => '255', 'placeholder' => '245 : <chapter_name>', 'value' => set_value('manga_recent_epi'), 'required' => 'required');
            echo form_input($manga_recent_epi);
            echo form_error('manga_recent_epi', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
            echo form_label("Read Chapter :", 'manga_read_epi');

            $manga_read_epi = array('name' => 'manga_read_epi', 'id' => 'manga_read_epi', 'type' => 'text', 'maxlength' => '255', 'placeholder' => '240 : <chapter_name>', 'value' => set_value('manga_read_epi'), 'required' => 'required');
            echo form_input($manga_read_epi);
            echo form_error('manga_read_epi', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
            echo form_label("Manga start date :", 'manga_start_date');

            $manga_start_date = array('name' => 'manga_start_date', 'id' => 'manga_start_date', 'type' => 'text', 'maxlength' => '255', 'placeholder' => '2000-01-20', 'value' => set_value('manga_start_date'), 'required' => 'required');
            echo form_input($manga_start_date);
            echo form_error('manga_start_date', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php echo form_submit('submit', 'Add'); ?>
		</p>
		<?php echo form_close(); ?>
	</div>
</div>

<?php $this -> load -> view('includes/footer'); ?>