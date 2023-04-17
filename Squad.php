<?php
abstract class Squad{
    private $minCount;
    private $maxCount;
    private $arrWarriors;
    private $nameSquad;
    public function __construct($nameSquad)
    {
        $this->nameSquad=$nameSquad;
        $this->minCount=5;
        $this->maxCount=25;

    }
    public function addToSquad($warrior)
    {
        if(count($this->arrWarriors)<=$this->maxCount)
        {
            array_push($this->arrWarriors,$warrior);
        }
        else{
            echo '<p>'.'Отряд переполнен!'.'</p>';
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