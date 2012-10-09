<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">

	<div id="inner_panel">
		<h1>My maNga</h1>

		<table id="manga_list">
			<?php foreach ($tables as $rows) {
			?>
			<tr>
			<th>Name</th><th>Latest Chapter</th><th>Author</th>
			</tr>
			<tr><br/></tr>
			<tr>
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['latest_chapter']; ?></td>
			<td><?php echo $rows['author']; ?></td>
			<?php } ?>
		</table>
	</div>
</div>

<?php $this -> load -> view('includes/footer'); ?>