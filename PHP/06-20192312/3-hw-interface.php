<?php
interface Run {
    const SPEED = 100;
    const STOP = 0;
    public function move();
    public function stop();
}
interface Hit{
    const BASE_DAMAGE = 50;
    public function hit();
}
class Hero implements Run, Hit {
    protected $name;
    protected $speed;
    protected $damage;
    public function __construct($name = "Underfined"){
        echo "Start of class<br>";
        $this->name = $name;
        $this->display();
        $this->speed = Run::STOP;
    }
    public function move(){
        $this->speed = Run::SPEED;
        echo "$this->name is move, speed = $this->speed.<br>";
        return $this;
    }
    public function stop(){
        $this->speed = Run::STOP;
        echo "$this->name is stop, speed = $this->speed.<br>";
    }
    public function hit(){
        $this->damage = Hit::BASE_DAMAGE;
        echo "With $this->damage damages, $this->name hits to the creep.<br>";
        return $this;
    }
    public function display(){
        echo "Hero's Name : $this->name.<br>";
    }
    public function __destruct(){
        echo "End of class. <br>";
    }
}
$antimage = new Hero("Antimage");
$antimage->move()->hit()->stop();

?>  