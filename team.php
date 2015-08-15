<?php

class queue {

    public  $head;
    public  $list;
    public  $tail;
    public  $queue = [];
    public  $size = 0;

    public function pushQueue() {
        $this->queue = array_push($this->queue);
        $this->size++;
    }

    public function shiftQueue() {

        if($this->lenQueuen() > 0) {
           array_shift($this->queue);
        }
    }

    public function lenQueue() {
        return count($this->queue);
    }
}

$queue = new queue();