<?php
ini_set('display_errors', 1);
/**
 * Input file PDF harus di folder bin ghost script, untuk mengakali harus pake realpath
 * Output file akan disimpan di recent directory
 */

/* 
$path_to_library_dir = "/usr/share/ghostscript/9.26/lib";
$path_to_binary = "/usr/bin/gs";
$command = 'export LD_LIBRARY_PATH="' . $path_to_library_dir . '"; ' . $path_to_binary;
shell_exec($command);
 */

$output = [];
$sourceFile = 'input.pdf';
$destFile = 'output.pdf';
if (substr(PHP_OS, 0, 3) == 'WIN') {
    exec("gswin64c -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -sOwnerPassword=ownerpass -sUserPassword=userpass -o $destFile $sourceFile", $output, $code);
} else {
    exec("/usr/bin/gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -sOwnerPassword=ownerpass -sUserPassword=userpass -o $destFile $sourceFile  2>&1", $output, $code);
}

// $output = exec("gs -v 2>&1");

var_dump($output);
die();
