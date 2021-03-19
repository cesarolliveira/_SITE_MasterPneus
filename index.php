<?php

require_once __DIR__ . '/source/_app/class/Link.class.php';

$modulo = Link::getURL(0);

if ($modulo == null) {
	$modulo = "home";
} else {
	$submodulo = Link::getURL(1);
	if ($submodulo) {
		$modulo = 'source/' . $modulo . '/' . $submodulo;
	}
}

if (file_exists(__DIR__ . '/' . $modulo . ".php")) {
	require $modulo . ".php";
} else {
	require "404.php";
}