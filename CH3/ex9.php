<?php
class Point {
    private $x;
    private $y;
    
    public function __construct($ax = 0,$ay = 0) {
        $this->x = $ax;
        $this->y = $ay;
    }
    
    public function __toString() {
        return "($this->x,$this->y)";
    }
    
    public function getX() {return $this->x;}
    public function getY() {return $this->y;}

    public function distance(Point &$a) {
        return sqrt(pow(($a->getX() - $this->getX()),2)
            + pow(($a->getY() - $this->getY()),2));
    }

    public function middle(Point &$a) : Point {
        $x = ($a->getX() + $this->getX()) / 2;
        $y = ($a->getY() + $this->getY()) / 2;

        return new Point($x,$y);
    }
}

echo new Point();
$a = new Point();
$b = new Point(0,1);
echo $b->distance($a);