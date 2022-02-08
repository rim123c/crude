
<div id="main-content">
	<h2>All REcords</h2>
<?php
	    $conn = mysqli_connect("localhost","root","","crud")or die("connection failed");
	    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
		$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result) > 0)
?>
	<table cellpadding="7px">
<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Class</th>
			<th>Phone</th>
			<th>Action</th>
</thead>
<tbody>
</tbody>
<?php 
	While($row = mysqli_fetch_assoc($result)){
?>
	<tr>

		<td>1</td>
		<td>mahi</td>
<td>
	<a href=edit.php?sid=1>EDIT</a>
	<a href=delete.php>Delete</a>

</td>

</tr>



<?php } ?>
</tbody>
	</table>
</div>
</div>
</body>
