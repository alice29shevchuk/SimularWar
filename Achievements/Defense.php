<?php
include_once './Achievements/Achievement.php';
class Defense extends Achievement {
    public function __construct()
    {
        parent::__construct("Defence",10,5,20);
//        echo "I work";
    }
}
?>