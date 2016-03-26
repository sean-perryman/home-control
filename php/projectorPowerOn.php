<?php
	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	$connection = socket_connect($socket, '10.41.92.200', 8899);
  if (!$connection) echo "<script>alert('Unable to connect to server.')</script>";
  $send = "\r*pow=on#\r";
  /*$dataSent = */socket_send($socket, $send, strlen($send), 0);
  /*if ($dataSent) echo "<script>alert('Command Sent');</script>";
  else echo "<script>alert('Failed to send command');</script>";*/
?>
