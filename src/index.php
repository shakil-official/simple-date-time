<?php

include "SimpleDateTime.php";

var_dump(Shakil\SimpleDateTime\SimpleDateTime::now()->timezone('EST'));
$data = Shakil\SimpleDateTime\SimpleDateTime::now()
    ->addMinute(3500);


var_dump($data);


