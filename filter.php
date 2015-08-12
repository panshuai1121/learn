<?php

error_reporting(E_ALL);
$number = 150;

//对指定的内容进行过滤 在数组中规定选项的时候， 必须要使用一个名为options的数组
$checkFiterVal = filter_var($number,FILTER_VALIDATE_INT,["options"=>['min_range'=>100,'max_range'=>220]]);

if($checkFiterVal) {

    getIsArray([]);
}

function getIsArray(array $arr){

    print_r($arr);


}
