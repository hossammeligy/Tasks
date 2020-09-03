<?php

class Instructor {

    ##################Attributes##################   
    private $id; #read-only#
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $occupation;
    private $position;
    private static $connection; #write-only#


    public function __construct() {
        global $connection;
        self::$connection = $connection;
    }
    ##################Setter&Getter######################
    private static function setConnection() {
        global $connection;
        self::$connection = $connection;
    }

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getOccupation() {
        return $this->occupation;
    }

    public function setOccupation($occupation) {
        $this->occupation = $occupation;
    }
    

    public function getPosition() {
        return $this->postition;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    #################Connection Functions################## 

    public function all() {
        self::setConnection();
        
        $sql = "SELECT * FROM instructors";

        $smt = self::$connection->prepare($sql);

        $smt->execute();

        return $smt->fetchAll(PDO::FETCH_OBJ);

    }

    public function store() {
        $sql = 'INSERT into `instructors` (first_name, last_name, email, phone, occupation, position) VALUES (:firstName, :lastName, :email, :phone, :occupation, :position)';

        $data = [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'occupation' => $this->occupation,
            'position' => $this->position
        ];

        $smt = self::$connection->prepare($sql);
        $smt->execute($data);

        return self::$connection->lastInsertId();

    }

}