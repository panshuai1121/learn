<?php
/*@param 二分查找法
 *@author panshuai
 */

class BinarySearch {
    public  $arr;
    public  $need;
    public  $low = 0;
    public  $hight;
    public function __construct($arr,$need,$height,$low){
        $this->arr  = $arr;
        $this->need = $need;
        $this->low  = $low;
        $this->height = $height;
    }

    public function getSearch(){
        while($this->height >= $this->low) {
            $mid = ceil(($this->height-$this->low)/2 + $this->low);
            if($this->arr[$mid] == $this->need) {
                return $mid;
            }else if($this->arr[$mid] > $this->need) {
                $this->height = $this->height - 1;
            }else if($this->arr[$mid] < $this->need) {
                $this->low = $this->low + 1;
            }
        }
        return -1;
    }
}

$arr = range(0,50);
$need = rand(0,50);
$count = count($arr) -1 ;
$binarySearch = new BinarySearch($arr,$need,$count,0);
$reback = $binarySearch->getSearch();

print_r($reback);


