<?php
class subject{
    
    ##################Setter&Getter##################
    private $id; #read-only#
    private $subjectName;
    private static $connection; #write-only#
   
    public function __construct() {
        global $connection;
        self::$connection = $connection;
    }
    ##################Setter&Getter######################

    public function setConnection()
    {
        global $connection;
        self::$connection = $connection;
    }

    public function setSubjectName($subjectName)
    {
        $this->subjectName= $subjectName;
    }

    public function getSubjectName()
    {
        return $this->subjectName;
    }
    public function getD()
    {
        return $this->id;
    }

    #################Connection Functions################## 
    public function all() {
        self::setConnection();
        
        $sql = "SELECT * FROM subject";

        $smt = self::$connection->prepare($sql);

        $smt->execute();

        return $smt->fetchAll(PDO::FETCH_OBJ);

    }
    public function store() {
        $sql = 'INSERT into `subjects` (_name) VALUES (:_name)';

        $data = [

            '_name' => $this->subjectName
        ];
        var_dump($data);
   
        $smt = self::$connection->prepare($sql);
        $smt->execute($data);

        return self::$connection->lastInsertId();
        
    }


}