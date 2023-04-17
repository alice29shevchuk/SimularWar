<?php
include_once 'Achievement.php';
class Health extends Achievement{
    public function __construct()
    {
        parent::__construct("Health",20,10,5);
    }
}
?>