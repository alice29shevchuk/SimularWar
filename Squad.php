<?php
include_once 'Warriors/Commander.php';
class Squad{
    private $minCount;
    private $maxCount;
    private $arrWarriors;
    private $nameSquad;
    private $commander;
    public function __construct($nameSquad,$commander)
    {
        $this->nameSquad=$nameSquad;
        $this->minCount=5;
        $this->maxCount=25;
        $this->arrWarriors = array();
        $this->commander = $commander;

    }
    public function getNameSquad()
    {
        return $this->nameSquad;
    }
    public function addToSquad($warrior)
    {
        if(count($this->arrWarriors)<=$this->maxCount)
        {
            $arr_achiv = $this->commander->get_achivments();
            foreach ($arr_achiv as $item){
                $warrior->update_speed($item->getSpeed());
                $warrior->update_health($item->getHealth());
                $warrior->update_protection($item->getProtection());
            }
            array_push($this->arrWarriors,$warrior);
        }
        else{
            echo '<p>'.'Отряд переполнен!'.'</p>';
        }
    }
    public function getSquad()
    {
        if(count($this->arrWarriors)>=$this->minCount)
        {
            foreach ($this->arrWarriors as $item){
                echo '<p>'.$item.'</p>';
            }
        }
        else{
            echo $this->nameSquad.' не укомплектован!'.'<br>';
        }
    }

    public function removeFromSquad()
    {
        if($this->arrWarriors!=null)
        {
            echo "Отряд существует";
        }
        else{
            echo "Отряд не существует";
        }
    }
}
?>