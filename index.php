<?php
$arr=array(1,4,3,2,8,6,9,4);
function quick_sort($arr) {
$n=count($arr);
if($n<=1)
    return $arr;
$key=$arr[0];
$left_arr=array();
$right_arr=array();
for($i=1;$i<$n;$i++) {
    if($arr[$i]<=$key)
    $left_arr[]=$arr[$i];
    else
    $right_arr[]=$arr[$i];
}
$left_arr=quick_sort($left_arr);
$right_arr=quick_sort($right_arr);
return array_merge($left_arr,array($key),$right_arr);
}

var_dump(quick_sort($arr));