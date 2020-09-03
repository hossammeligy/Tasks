<?php
class student{

##################Attributes##################    
    private $id; #read-only#
    private $firstName;
    private $lastName;
    private $phone;
    private $email;
    private $position;
    private $background;
    private static $connection; #write-only#

    public function __construct()
    {
     global $connection;
     self::$connection=$connection;
    }
##################Setter&Getter##################

    public function setConnection()
    {
        global $connection;
        self::$connection = $connection;
    }


    public function setFirstName($firstName)
    {
        $this->firstName =$firstName;
    }
    public function getFirstName()
    {
        return $this->firstname;
    }
    public function setLastName($lastName)
    {
        $this->lastName=$lastName;
    }
    public function setPhone($phone)
    {
    $this->phone=$phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getID()
    {
        return $this->id;
    }
    public function setPosition($position)
    {
        $this->position=$position;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function setBackground($background)
    {
        $this->background = $background;
    }
    public function getBackground()
    {
        return $this->background;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
    return $this->email; 
    }

    public function all() {
        self::setConnection();
        
        $sql = "SELECT * FROM student";

        $smt = self::$connection->prepare($sql);

        $smt->execute();

        return $smt->fetchAll(PDO::FETCH_OBJ);

    }
    public function store()
    {
        $sql = 'INSERT into `student` (first_name,last_name,phone,position,email,background) VALUES (:first_name,:last_name,:phone,:position,:email,:background)';
        $data = [
            'first_name'=>$this->firstName,
            'last_name'=>$this->lastName,
            'phone'=>$this->phone,
            'position'=>$this->position,
            'email'=>$this->email,
            'background'=>$this->background

        ];
        
        
        $smt=self::$connection->prepare($sql);
        $smt->execute($data);
        return self::$connection->lastInsertId();
       
    }



}