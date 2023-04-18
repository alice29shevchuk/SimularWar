<?php

abstract class Achievement
{
    protected $name;
    protected $health;
    protected $speed;

    protected $protection;

    protected function __construct($name,$health,$speed,$protection)
    {
        $this->name=$name;
        $this->health=$health;
        $this->speed=$speed;
        $this->protection=$protection;
    }
    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

}

?>