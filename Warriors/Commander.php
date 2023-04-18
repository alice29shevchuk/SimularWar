<?php
include_once './Warriors/Warrior.php';
class Commander extends Warrior
{
    private $achievements;

    public function __construct()
    {
        $this->achievements = array();
    }
    public function add_achivment($achiv){
        array_push($this->achievements,$achiv);
    }
    public function get_achivments(){
        return $this->achievements;
    }
}

?>