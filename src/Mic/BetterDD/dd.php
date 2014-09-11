<?php

if (!function_exists('debug')) {
	function debug($val) {
		echo "<pre>";
		print_r($val);
		echo "</pre>";
	}
}

function ddd($val) {
	echo "<pre>";
	var_dump($val);
	echo "</pre>";
	exit;
}