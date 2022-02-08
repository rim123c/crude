<div id="main-content">
	<h2>Add All Records</h2>
	<form class="post-form" action="savedata.php" method="post">
<div class="form-group">
			<label>Name</label>
			<input type="text" name="sname">
</div>
<div class="form-group">
			<label>Address</label>
			<input type="text" name="saddress">
</div>

<div class="form-group">
	<label>class</label>
<select name="class">
		<option value=""select disabled>select class</option>
		<?php
		 $conn = mysqli_connect("localhost","root","","crud")or die("connection failed");
	     $sql = "SELECT * FROM studentclass ";
		 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
while ($row =mysqli_fetch_assoc($result)) {
?>
		<option value="<?php echo $row['cid']; ?>"><?php echo $row['cname'];?></option>
<?php 
}
?>
</select>
</div>
<div class="form-group">
	<label>phone</label>
	<input type="text" name="sphone">
</div>
<input class="submit" type="submit" value="save"/>

	</form>
</div>