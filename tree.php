<?php
class node{
    public $value;
    public $left;
    public $right;
    public $parent;

    public function __construct($data){
        $this->value = $data;
    }
}

class Tree{
    public $root = null;

    public function __construct($value){
        $this->root = new node($value);
    }

    public function insertNode(array $inode){
        foreach ($inode as $value) {
            $current = $this->root;
            $parent = null;
            while($current !== null){
                $parent = $current;
                if($current->value > $value){
                    $current = $current->left;
                }else{
                    $current = $current->right;
                }
            }

            $node = new node($value);
            $node->parent = $parent;
            if($parent->value > $value){
                $parent->left = $node;
            }else{
                $parent->right = $node;
            }
        }

        return true;
    }
}


echo '<pre>';
$tree = new Tree(191);
$tree->insertNode([121,131,391,312,361,234,164,188]);
print_r($tree);

?>
