<?php 

class Frog extends Animal{

    public function jump(){
        $str = "hop hop";
        return $str;
    }

    public function getCetakData(){
        $str = parent::getCetakData()." | Jump: {$this->jump()}.";

        return $str;
    }
}


?>