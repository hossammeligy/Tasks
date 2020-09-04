<?php

class course{
    ##################Attributes##################  
    private $courseId; #read-only#
    private $name; 
    private $description;
    private static $connection;
    private $instructorId;
    


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
    public function setInstructorId($instructorId)
    {
        $this->instructorId=$instructorId;
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
        
        $sql = "SELECT * FROM courses";

        $smt = self::$connection->prepare($sql);

        $smt->execute();

        return $smt->fetchAll(PDO::FETCH_OBJ);

    }
    public function store()
    {
        $sql = 'INSERT into `courses` (course_name,description,instructor_id) VALUES (:name,:description,:instructor_id)';
        $data = [
            'name'=>$this->name,
            'description'=>$this->description,
            'instructor_id'=>$this->instructorId
        ];   
        $smt= self::$connection->prepare($sql);
        $smt->execute($data);
       
        return self::$connection->lastInsertId();

    }
    

}