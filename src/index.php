<?php

include "SimpleDateTime.php";


$data = Shakil\SimpleDateTime\SimpleDateTime::now()
    ->setDate(2022,9,3)
    ->setTime(0,1,11)
    ->addHour(1)
    ->format('D-M-Y H:m:s');

$data = \Shakil\SimpleDateTime\SimpleDateTime::createFromFormat('Y-m-d H', '1975-05-21 22');

var_dump(($data->format('Y-m-d H')));


