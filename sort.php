<?php

$sortArr = [
    256 => ['name'=>'Json','grade'=>98.5],
    251 => ['name'=>'Jxon','grade'=>18.5],
    253 => ['name'=>'Jaon','grade'=>198.5],
    250 => ['name'=>'Jxlon','grade'=>97.5],
];

echo "<pre>";
uasort($sortArr,function($x,$y){
    return strcasecmp($x['name'] < $y['name']);
});


usort($sortArr,function($x,$y){
    return $x['grade']< $y['grade'];
});

print_r($sortArr);
