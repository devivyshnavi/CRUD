<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['id'])){
		$id = $_POST['id'];
		$list1 = $_POST['list1'];
		
		$description = $_POST['description'];
		
		$conn->query("UPDATE `member` set `list1` = '$list1',  `description` = '$description' WHERE `mem_id` = '$id'");
	}
	
?>