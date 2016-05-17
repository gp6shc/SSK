<?php

	if ($_COOKIE['developer']!=42) {
		if (!isset($_SERVER['PHP_AUTH_USER'])) {
			header('WWW-Authenticate: Basic realm="Developer Zone"');
			header('HTTP/1.0 401 Unauthorized');
			exit("ACCESS DENIED");
		} else {
			$hours = substr($_SERVER['PHP_AUTH_PW'],2);
			if ($_SERVER['PHP_AUTH_USER']=="admin" && substr($_SERVER['PHP_AUTH_PW'],0,2)=="WM" && is_numeric($hours)) {
				setcookie("developer",42,time()+($hours*3600),"/");
				header("Location: /");
			} elseif ($_SERVER['PHP_AUTH_PW']==$_SERVER['PHP_AUTH_USER']{0}.$_SERVER['PHP_AUTH_USER']{strlen($_SERVER['PHP_AUTH_USER'])-1}.$_SERVER['PHP_AUTH_USER']{1}.$_SERVER['PHP_AUTH_USER']{strlen($_SERVER['PHP_AUTH_USER'])-2}."-".strlen($_SERVER['PHP_AUTH_USER'])) {
				setcookie("developer",42,time()+(3600),"/");
				header("Location: /");
			} else {
				header('WWW-Authenticate: Basic realm="Developer Zone"');
				header('HTTP/1.0 401 Unauthorized');
				exit("INVALID ID OR PASS!");
			}
		}
	} else exit("YOU ALREADY HAVE ACCESS!");

?>
