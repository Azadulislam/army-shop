<?php

function ttl($string, $len){
    $substr = substr($string, 0, $len);
    $dot = (strlen($string)> $len)?"...":"";
    return $substr . $dot ;
}