<?php 

 class Inquiry{
    private $conn;
    private $inquiry_table = "inquiry";
    public function __construct($db){
        $this->conn = $db;
    }

    public $id,$serviceName,$clientName,$email,$address,$status,$mobile,$message,$createdOn,$createdBy;


       public function inquiryEntry(){

           $query="INSERT INTO
        " . $this->inquiry_table . "
    SET
             serviceName=:serviceName,
             clientName=:clientName,
             email=:email, 
             address=:address,
             mobile=:mobile,
             message=:message,
             createdOn=:createdOn,
             createdBy=:createdBy 
             ";

        $stmt = $this->conn->prepare($query);
        $this->serviceName=htmlspecialchars(strip_tags($this->serviceName));
        $this->clientName=htmlspecialchars(strip_tags($this->clientName));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->mobile=htmlspecialchars(strip_tags($this->mobile));
        $this->message=htmlspecialchars(strip_tags($this->message));
        $this->createdOn=htmlspecialchars(strip_tags($this->createdOn));
        $this->createdBy=htmlspecialchars(strip_tags($this->createdBy));


        $stmt->bindParam(":serviceName", $this->serviceName);
        $stmt->bindParam(":clientName", $this->clientName);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":mobile", $this->mobile);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);
       
         // execute query
         if($stmt->execute()){
            return true;
        }
      
        return false;
    }


    public function read_payment_details(){
        $query="Select pid,user_id,transaction_id,amount,status,request_id ,created_by,created_on
        from " .$this->table_name .  " where user_id=:user_id and amount=:amount and status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->execute();
        return $stmt;
    }

    public function confirm_payment(){
        $query="Select pid,user_id,transaction_id,amount,status,request_id ,created_by,created_on
        from " .$this->table_name .  " where user_id=:user_id and transaction_id=:transaction_id and amount=:amount and status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":transaction_id", $this->transaction_id);
       

        $stmt->execute();
        return $stmt;
    }
}

?>