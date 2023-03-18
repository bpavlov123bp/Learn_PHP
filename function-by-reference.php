<?php
function add(&$str2){
    $str2 .= 'Call By Reference!';
}
$str = "Hello ";
add($str);
echo $str;
?>