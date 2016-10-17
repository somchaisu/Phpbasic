<?php

class car{
    public $color; //property
    
    public function  setColor($c){
        return 'Car is :'.$this->color=$c;
    }
    
    public function  sayhello(){
        return'sayhello';
    }
}

$newcar=new car;

$test=$newcar->setColor('red');
echo $test;
echo '<hr>';
echo $newcar->sayhello();
echo '<hr>';
echo $newcar->color='orange';
