<?php
include_once 'Achievement.php';
 class Boost extends Achievement{
     public function __construct()
     {
         parent::__construct("Booster",10,20,5);
     }
}
?>