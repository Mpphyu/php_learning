<?php

$time = date("h");

if ($time > 6 and $time <18) 
    echo "Day Time";
else echo "Night Time";