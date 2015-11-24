<script type="text/javascript">
	function swap(a){
		console.log(""+a);
	}
</script>
<?php
	echo '<p onclick="swap(\'asdasdasdasdasdasd\')">Click me</p>';
?>
<form action="example.check_box.php" method="POST">
<input type="checkbox" name="color[]" value="Red">Red
<input type="checkbox" name="color[]" value="Green">Green
<input type="checkbox" name="color[]" value="Blue">Blue
<input type="checkbox" name="color[]" value="Yellow">Yellow
<input type="submit" name="submit" value="submit">
</form>