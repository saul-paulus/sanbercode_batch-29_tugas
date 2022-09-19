<?php 

class Animal{

    public $name,
         $legs, 
        $cold_blooded;

    public function __construct($name, $legs=4, $cold_blooded = "no"){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    public function getCetakData(){
         $str =  "Name: {$this->name} | legs: {$this->legs} | cold__blooded: {$this->cold_blooded}";

         return $str;
    }

}
?>