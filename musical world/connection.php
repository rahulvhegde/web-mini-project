<?php

	$conn = mysqli_connect('localhost','root123','','tables');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

 ?>