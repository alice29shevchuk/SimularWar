<?php
include_once './Warriors/Warrior.php';
class Battlefield{
    private $weather;
    private $first_squad;
    private $second_squad;

    private $firstSquad;
    private $secondSquad;
    public function __construct($weather,$firstSquad,$secondSquad)
    {
        $this->weather=$weather;
        $this->firstSquad=$firstSquad;
        $this->secondSquad=$secondSquad;

        $this->first_squad=$firstSquad->getSquad();
        $this->second_squad=$secondSquad->getSquad();
        if($this->weather=="true")
        {
            echo "It`s raining now!!!";
            foreach ($this->first_squad as $squad_1)
            {
                $squad_1->update_speed(-10);
//                echo '<p>'.$squad_1.'</p>';
            }

            foreach ($this->second_squad as $squad_2)
            {
                $squad_2->update_speed(-10);
//                echo '<p>'.$squad_2.'</p>';
            }
        }
        else{
            echo "It`s sunny now!!!";
        }
    }
    public function Battle(){
        do{
            $this->first_squad[$this->randWarrior($this->first_squad)]->Attack($this->second_squad[$this->randWarrior($this->second_squad)]);
            $this->updateSquads();
            if(count($this->first_squad) == 0 || count($this->second_squad) == 0){
                if(count($this->first_squad) == 0){
                    echo "<h1 style='color: green'>".$this->secondSquad->getNameSquad().' - WINNER!'."</h1>";
                }
                elseif (count($this->second_squad)==0){
                    echo "<h1 style='color: green'>".$this->firstSquad->getNameSquad().' - WINNER!'."</h1>";
                }
                break;
            }
            echo "<br>____________________________________<br>";
            $this->second_squad[$this->randWarrior($this->second_squad)]->Attack($this->first_squad[$this->randWarrior($this->first_squad)]);
            $this->updateSquads();
            if(count($this->second_squad) == 0 || count($this->first_squad) == 0 ){
                if(count($this->first_squad) == 0){
                    echo "<h1 style='color: green'>".$this->secondSquad->getNameSquad().' - WINNER!'."</h1>";
                }
                elseif (count($this->second_squad)==0){
                    echo "<h1 style='color: green'>".$this->firstSquad->getNameSquad().' - WINNER!'."</h1>";
                }
                break;
            }
            echo "<br>____________________________________<br>";
        }while(count($this->first_squad) != 0 || count($this->second_squad)!=0);
    }
    private function randWarrior($squad){
        return rand(0,count($squad)-1);
    }
    private function updateSquads(){
        $fir_ms = array();
        $sec_mas = array();
        foreach ($this->first_squad as $fr){
            if($fr->isLive()==true){
                array_push($fir_ms,$fr);
            }
            else{
                echo "<h2 style='color: red'>".$fr->get_name()." IS DEAD!</h2>";
            }
        }
        $this->first_squad = $fir_ms;
        foreach ($this->second_squad as $se){
            if($se->isLive()==true){
                array_push($sec_mas,$se);
            }
            else{
                echo "<h2 style='color: red'>".$se->get_name()." IS DEAD!</h2>";
            }
        }
        $this->second_squad = $sec_mas;
    }
}
?>