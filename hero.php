<?php
/**
 *@param  西游记游戏英雄设定 实现单链表模式
 *@author panshuai
 */
class Heros {

    public $id ;
    public $name ;
    public $nickName;

    public function __construct($id = null , $name = null,$nickName = null){

        $this->id = $id;
        $this->name = $name;
        $this->nickName = $nickName;

    }
}

class OperationHeros {

    public  $heros = null;
    public  $next  = null;
    public  $msgInfo = [
                            '1' => '非法请求',
                            '2' => '操作的英雄不存在',
                            '3' => '该英雄已经成功删除'
                       ];

    public function __construct($id = null ,$name = null , $nickName = null){

        $this->heros = new Heros($id, $name , $nickName);
    }

    public function addHeros($hero){

        $heros_exits = false;
        $currentHeros = $this->heros;

        while($currentHeros->next != null) {
            if($currentHeros->next->id == $hero->id) {
                $heros_exits = true;
            }
            $currentHeros = $currentHeros->next;
        }

        if(!$heros_exits) {
            $hero->next = $currentHeros->next;
            $currentHeros->next = $hero;
        }
    }

    public function delHeros($id = 0){
       $herosDelId = $id ? (int) $id : die($this->msgInfo['1']);
       $heros_exits = false;
       $herosList =  $this->heros;
       while($herosList->next != null) {
           if($herosList->next->id == $herosDelId) {
               $heros_exits = true;
               break;
           }
           $herosList = $herosList->next;
       }
       if($heros_exits) {
           $herosList->next = $herosList->next->next;
           return $this->msgInfo['3'];
       }else {
           return $this->msginfo['4'];
       }
    }

    public function upHeros($id,$herosNew){
        $upHerosId = !empty($id) ? (int) $id : die($this->msgInfo['2']);
        $heros_exits = false;
        $upHeroList = $this->heros;
        while($upHeroList->next != null) {
            if($upHeroList->next->id  == $upHerosId){
                $heros_exits = true;
            }
            $upHeroList = $upHeroList->next;
        }

        if($heros_exits) {
            if(is_object($herosNew) && !empty($herosNew)) {
                $upHeroList->id   = $herosNew->id;
                $upHeroList->name = $herosNew->name;
                $upHeroList->nickName = $herosNew->nickName;
            }
        }
    }

    public function showHeros(){

        $showHerosList = $this->heros;
        while($showHerosList->next != null) {
           echo $showHerosList->next->id.'位'.$showHerosList->next->name.'封号'.$showHerosList->next->nickName."\n";
           $showHerosList = $showHerosList->next;
        }
    }

}

$hero = new OperationHeros();
$hero->addHeros(new Heros('1','孙悟空','斗战圣佛'));
$hero->addHeros(new Heros('2','牛魔王','平天大圣'));
$hero->delHeros('2');
$hero->addHeros(new Heros('2','猪八戒','天蓬元帅'));
$hero->upHeros('2',new Heros('2','牛魔王','平天大圣'));
$hero->addHeros(new Heros('3','沙和尚','卷莲将军'));
$hero->showHeros();



