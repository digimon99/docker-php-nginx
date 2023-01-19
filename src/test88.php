<?php

echo time()."\n\n";

$debug = print_r($_SERVER,true);
echo $debug;

$debug = print_r($_GET,true);
echo $debug;
