<?php

/**
 * Input file PDF harus di folder bin ghost script, untuk mengakali harus pake realpath
 * Output file akan disimpan di recent directory
 */
$output = [];
exec("gswin64c -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -sOwnerPassword=ownerpass -sUserPassword=userpass -o output.pdf dummy.pdf", $output);

echo $output[0];
