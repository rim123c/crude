<?php
echo $stu_name = $_POST['sname'];
echo $stu_saddress = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_sphone = $_POST['sphone'];


 $conn = mysqli_connect("localhost","root","","crud")or die("connection failed");
	     $sql = "INSERT INTO  student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') ";
		 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("location:crude.php");

mysqli_close($conn);
?>