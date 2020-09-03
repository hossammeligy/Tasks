<?php

class course{
    ##################Attributes##################  
    private $courseId; #read-only#
    private $name; 
    private $description;
    private static $connection;
    private $instructorID;
    


    public function __construct()
    {
        global $connection;
        self::$connection = $connection;

    }
    ##################Setter&Getter######################
    public function setConnection(){
        global $connection;
        self::$connection = $connection;
    }
    public function getCourseID()
    {
        return $this->courseId;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setDescription($description)
    {
        $this->description=$description;
    }
    public function getDescription()
    {
        return $this->description;
    }
 
     ################################### 

     public function all() {
        self::setConnection();
        
        $sql = "SELECT * FROM instructors";

        $smt = self::$connection->prepare($sql);

        $smt->execute();

        return $smt->fetchAll(PDO::FETCH_OBJ);

    }
    public function store()
    {
        $sql = 'INSERT into `courses` (course_name,description,instructor_id) VALUES (:course_name,:description,:instructor_id)';
        $data = [
            'course_name'=>$this->name,
            'description'=>$this->description,
            'instructor_id'=>$this->instructorID
        ];   
        $smt= self::$connection->prepare($sql);
        $smt->execute($data);
        var_dump($data);
        return self::$connection->lastInsertId();

    }
    

}