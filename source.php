<?php

$filePath = $_GET['file_path'];

$source_code = file_get_contents($filePath);

$source_code = trim(preg_replace('/(<php\?)?.*require_once.*?(header|footer).*\r?\n?\r?\n?/', '', $source_code));
$source_code = trim(preg_replace('/\$sourceFiles.*?(\[|\]).*\r?\n?\r?\n?/', '', $source_code));

echo $source_code;