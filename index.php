<?php 
	/*
	php builtin server command
	------------------------------------
	php -S 127.0.0.1:8080 -t . index.php 
	------------------------------------
		-S [address]:[port]
			-S 127.0.0.1:8080
		-t [root directory] [router file]
			-t . index.php 
	*/
	/*
	markdown viewer - firefox plugin
	------------------------------------
		https://github.com/Thiht/markdown-viewer
	------------------------------------
	*/

	// markdown file extension
	$file_ext = ".md";

	// ------------------------------------
	// routing
	// ------------------------------------

	// parse url
	$filename = parse_url(
			$_SERVER["REQUEST_URI"], 
			PHP_URL_PATH
	);

	// remove leading '/' character
	$filename = preg_replace('/^[\/]/', '', $filename);

	// close open parenthesis '(' character
	$filename = preg_replace('/[\(]$/', '()', $filename);

	// var_dump($filename);
	// die();

	if ( substr($filename, -3) !== $file_ext ) {
		$filename .= $file_ext;
		header("Location: /".$filename);
		exit;
	}

	// print file
	$file = file_get_contents($filename);
	header('Content-type: text/plain');
	echo $file;

?>