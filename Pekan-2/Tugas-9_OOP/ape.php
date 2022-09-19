<?php 

class Ape extends Animal{

    public $name, 
        $legs,
        $cold_blooded;
    

   

    public function __construct($name, $legs = 2, $cold_blooded="no"){
        parent::__construct($name, $legs, $cold_blooded);
    }

    public function yell(){
        $str= "Auoooooo";
        return $str;
    }

    public function getCetakData(){
        $str =  parent::getCetakData() ."| Yell: {$this->yell()}.";
        
        return $str;
    }
}

?>