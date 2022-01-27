<?php
	require_once 'conn.php';
	
	$list1 = $_POST['list1'];
	$description = $_POST['description'];
	
	$conn->query("INSERT INTO `member` VALUES('', '$list1', '$description')");
	
?>