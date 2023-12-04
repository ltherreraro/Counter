<?php

$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_bind($sock, '0.0.0.0',8080);

socket_listen($sock);

$clientsock = socket_accept($sock);

$data = socket_read($clientsock, 4096);

$receivedList = unserialize($data);
print_r($receivedList);
//print "$data\n";


//socket_close($clientsock);

//scoket_close($sock);

?>


