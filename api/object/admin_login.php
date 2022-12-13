<?php
class Admin{

    private $conn;
    private $table_name = "admin";
    public $id,$full_name,$email,$password,$created_on,$created_by;
    public function __construct($db){
        $this->conn = $db;
    }

    function adm_login(){
        $query="Select 
        id,password,  email,full_name,created_on,updated_on  from " .$this->table_name .  " where email=:email and password=:password";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);

        $stmt->execute();
        return $stmt;
    }
}
    ?>