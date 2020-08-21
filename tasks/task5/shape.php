<?php
class shape{
    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    protected $width;
    private $id;
    public function __construct($length, $width){
        $this->length=$length;
        $this->width=$width;
        $this->id=rand(1,100);
    }
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function getID(){
        return $this->id;
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
        return "Type"." " .self::SHAPE_TYPE;
    }
    public function getFullDescription(){
        if (self::SHAPE_TYPE == 1 || self::SHAPE_TYPE == 2)
        return "Shape<$id>:" . " " . $this->name . " " . $this->length ."x". $this->width ;
        if(self::SHAPE_TYPE==3)
        return "Circle<$id>: $name - $radius";
    }
}
$shape = new shape(4,4);
$shape->setName('Square');
echo "<br>";
echo $shape->getTypeDescription();
echo "<br>";
echo $shape->getFullDescription();