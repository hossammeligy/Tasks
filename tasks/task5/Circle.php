<?php

require_once('./shape.php');

class Circle extends shape{
    const SHAPE_TYPE =3;
    protected $radius;
    public function __construct($radius){
        parent::__construct($radius,$radius);
        $this->radius =$radius;
}

public function __call($name,$arguments){
    if ($name=='area'){
        switch(count($arguments)){
            case 1:
                return $this->length * $this->width;
            break;
            case 2:
                return $this->length * $this->width;
            break;
            case 3:
                return pi()*($radius^2);
            break;
            default:
            return idk;
        }
    }
}


public static  function  getTypeDescription(){
    return "Type"." " . self::SHAPE_TYPE;
}

    function getFullDescription(){
        if (self::SHAPE_TYPE == 1 || self::SHAPE_TYPE == 2)
        return "Shape<id>:" . " " . $this->name . " " . $this->radius ;
        if(self::SHAPE_TYPE==3)
        return "Circle<id>:" . $this->name . " " . "-" . " " .$this->radius;
    }
}

$cr = new Circle(4);
var_dump($cr);
$cr->setName('Circle');
echo "<br>";
echo $cr->getTypeDescription();
echo "<br>";
echo $cr->getFullDescription();

