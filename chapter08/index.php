<?php

include('WriteLock.php');

$data = $_GET['lock'];
$lock = unserialize($data);

echo "Lock initiated.";

?>