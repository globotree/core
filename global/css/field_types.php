<?php

// currently this file is told to never cache. Need a better solution in the long term
header("Content-Type: text/css");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

$g_check_ft_sessions = false;
require_once("../library.php");

echo FieldTypes::getFieldTypeResources("css");
