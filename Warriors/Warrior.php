<?php
    abstract class Warrior{
        protected $nameWarrior;
        protected $weapon;
        protected $health;
        protected $armor;
        protected $speed;
        protected $protection;

        public function isLive(){
            if($this->health > 0){
                return true;
            }
            else{
                return false;
            }
        }
        public function get_name(){
            return $this->nameWarrior;
        }
        public function Attack($enemy){
            $enemy->health = $enemy->health - $this->weapon->getDamage();
            echo "<p>Player: ".$this->nameWarrior." attack -> player: ".$enemy->nameWarrior."</p>";
            echo "<p>Health player: ".$this->nameWarrior." ---- ".$this->health."</p>";
            echo "<p>Health player: ".$enemy->nameWarrior." ---- ".$enemy->health."</p>";


        }
        public function Protection(){
            $this->protection = $this->protection - 5;
            echo "<p> Protection player ".$this->nameWarrior." is: ".$this->protection."</p>";
        }
        public function Moving(){
            echo "<p> Player: ".$this->nameWarrior." moves at speed: ".$this->speed."</p>";
        }
        public function update_speed($updeter){
            $this->speed = $this->speed + $updeter;
        }
        public function update_health($updeter){
            $this->health = $this->health + $updeter;
        }
        public function update_protection($updeter){
            $this->protection = $this->protection + $updeter;
        }
        public function __toString()
        {
            return 'Name: '.$this->nameWarrior.'<br>'.'Speed: '.$this->speed.'<br>'.'Health: '.$this->health;
    }
    }
?>