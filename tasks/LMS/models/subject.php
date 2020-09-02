<?php
class subject{
    private $id;
    private $subjectName;
    private static $connection;
   
    public function __construct() {
        global $connection;
        self::$connection = $connection;
    }


    public function setConnection()
    {
        global $connection;
        self::$connection = $connection;
    }

    public function setSubjectName($subject)
    {
        $subjectName= $this->subjectName;
    }

    public function getSubjectName()
    {
        return $this->subjectName;
    }
    public function getD()
    {
        return $this->id;
    }
    public function all() {
        self::setConnection();
        
        $sql = "SELECT * FROM subjects";

        $smt = self::$connection->prepare($sql);

        $smt->execute();

        return $smt->fetchAll(PDO::FETCH_OBJ);

    }
    public function store() {
        $sql = 'INSERT into `subjects` (_name) VALUES (:_name)';

        $data = [
           
            '_name'=>$this->subjectName
        ];

        $smt = self::$connection->prepare($sql);
        $smt->execute($data);

        return self::$connection->lastInsertId();
var_dump($data);
    }


}