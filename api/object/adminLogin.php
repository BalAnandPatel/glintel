<?php
class Admin{

    private $conn;
    private $table_name = "admin_login";
    public $id,$userId,$password,$roal,$status,$createdOn,$createdBy,$updatedOn,$updatedBy;
    public function __construct($db){
        $this->conn = $db;
    }

    function adminLogin(){
      echo  $query="Select 
        id,password,userId,createdOn,createdBy  from " .$this->table_name .  " where userId=:userId and password=:password";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(":password", $this->password);

        $stmt->execute();
        return $stmt;
    }
}
    ?>