<?php

/*$arr = [
    array('key1'=>940,'key2'=>'shuai'),
    array('key1'=>23,'key2'=>'chao'),
    array('key1'=>1222,'key2'=>'liuguihua'),
    array('key1'=>1,'key2'=>'panyujin'),
];

function name_srot($x,$y){
    return strcasecmp($x['key2'],$y['key2']);
}

function gread_asort($x,$y){
    return ($x['key1'] < $y['key1']);
}

//uasort($arr,'name_sort');

uasort($arr,'gread_asort');

print_r($arr);
*/


$hello = function($who){
    echo "Hi~ ,$who";
};

$hello('超超,快点回家吧～ 停电了啊！');


$arr = ['a','SASDA','c'];
//将数组的所有的建名改成大写或小写
$arr = array_change_key_case($arr);
//切割数组 如果第三个参数为true的时候 保留原有的键值
$arr = array_chunk($arr,2,true);
//填充一个新数组
$arr = array_fill(1,3,5);
//从数组中取出一列
$cloum = [
   ['id'=>1,'name'=>'panshuai','age'=>27],
   ['id'=>2,'name'=>'panchao','age'=>27],
   ['id'=>3,'name'=>'panyujin','age'=>50],
];
//取数组中的一列
$arr = array_column($cloum,'name','id');
//统计数组所有制出现的次数
$count = array_count_values($cloum);

var_dump($count);



