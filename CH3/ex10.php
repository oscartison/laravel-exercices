<?php
require_once "ex9.php";
class Cercle {
    private $centre;
    private $rayon;

    public function __construct(Point $ax,$ay = 1) {
        $this->centre = $ax;
        $this->rayon = $ay;
    }
    
    public function __toString() {
        return "($this->centre,$this->rayon)";
    }
    
    public function getRayon() {return $this->rayon;}
    public function getCentre() {return $this->centre;}

    public function superficie() {
        return $this->rayon * pi();
    }
}
$a = new Cercle(new Point);
echo $a->superficie();