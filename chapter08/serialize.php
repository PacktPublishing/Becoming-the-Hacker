<?php

include('WriteLock.php');

$lock = new WriteLock();
echo serialize($lock);

?>