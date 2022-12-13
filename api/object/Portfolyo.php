<?php 

 class Portfoliyo{

    private $conn;
    private $table_name = "portfolio";
  
    public function __construct($db){
        $this->conn = $db;
    }

    public $id,$clientName,$clientMoble,$clientLogo,$clientLogoTitle,$clientUrl,$clientComment,
    $clientPhoto,$status,$createdOn,$createdBy,$updatedOn,$created_by,$updatedBy;

    public function read_exam(){
        $query="Select  id,clientName,clientMoble,clientLogo, clientLogoTitle,clientUrl,clientComment, clientPhoto,status,createdOn,createdBy,updatedOn,updatedBy
        from " .$this->table_name .  " where status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    // public function read_exam_details(){
    //     $query="Select  id,exam_name,type, age, total_post, eligibility, amount, status, exam_date_start, exam_date_end, result_date,admit_card_date,created_by,created_on
    //     from " .$this->table_name .  " where exam_name=:exam_name";
    //     $stmt = $this->conn->prepare($query); 
    //     $stmt->bindParam(":exam_name", $this->exam_name);
    //     $stmt->execute();
    //     return $stmt;
    // }

    //  public function read_payment_varify_details(){
    //    $query="Select  reg.id,reg.full_name,reg.registration_no,dob,mobile,reg.exam_name,amount,reg.status,
    //     reg.created_on, reg.created_by from " .$this->table_registration . " as reg left join "
    //      . $this->table_name . " as exam on reg.exam_name=exam.exam_name 
    //     where reg.registration_no=:registration_no and reg.mobile=:mobile and reg.dob=:dob";
    //     $stmt = $this->conn->prepare($query); 
    //     $stmt->bindParam(":registration_no", $this->registration_no);
    //     $stmt->bindParam(":mobile", $this->mobile);
    //     $stmt->bindParam(":dob", $this->dob);
    //     $stmt->execute();
    //     return $stmt;
    // }

    //  public function read_payment_varify_details(){
    //     $query="Select  reg.id,reg.full_name,dob,mobile,reg.exam_name,reg.status,
    //     reg.created_on, reg.created_by from " .$this->table_registration ." as reg
    //     where reg.registration_no=:registration_no and reg.mobile=:mobile and reg.dob=:dob";
    //     $stmt = $this->conn->prepare($query); 
    //     $stmt->bindParam(":registration_no", $this->registration_no);
    //     $stmt->bindParam(":mobile", $this->mobile);
    //     $stmt->bindParam(":dob", $this->dob);
    //     $stmt->execute();
    //     return $stmt;
    // }



    // public function read_exam_list(){
    //     $query="Select  id,exam_name,type,age,total_post,eligibility,
    //      amount,status,exam_date_start,exam_date_end,result_date,admit_card_date,created_by,created_on
    //     from " .$this->table_name;
    //     $stmt = $this->conn->prepare($query); 
    //     $stmt->execute();
    //     return $stmt;
    // }

    public function insertPortfoliyo(){

      $query="INSERT INTO
        " . $this->table_name . "
    SET
             clientName=:clientName,
             clientMoble=:clientMoble,
             clientLogo=:clientLogo, 
             clientLogoTitle=:clientLogoTitle,
             clientUrl=:clientUrl,
             clientComment=:clientComment,
             clientPhoto=:clientPhoto,
             status=:status,
             createdOn=:createdOn,
             createdBy=:createdBy
            ";

        $stmt = $this->conn->prepare($query);
        $this->clientName=htmlspecialchars(strip_tags($this->clientName));
        $this->clientMoble=htmlspecialchars(strip_tags($this->clientMoble));
        $this->clientLogo=htmlspecialchars(strip_tags($this->clientLogo));
        $this->clientLogoTitle=htmlspecialchars(strip_tags($this->clientLogoTitle));
        $this->clientUrl=htmlspecialchars(strip_tags($this->clientUrl));
        $this->clientComment=htmlspecialchars(strip_tags($this->clientComment));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->clientPhoto=htmlspecialchars(strip_tags($this->clientPhoto));
        $this->createdOn=htmlspecialchars(strip_tags($this->createdOn));
        $this->createdBy=htmlspecialchars(strip_tags($this->createdBy));


        $stmt->bindParam(":clientName", $this->clientName);
        $stmt->bindParam(":clientMoble", $this->clientMoble);
        $stmt->bindParam(":clientLogo", $this->clientLogo);
        $stmt->bindParam(":clientLogoTitle", $this->clientLogoTitle);
        $stmt->bindParam(":clientUrl", $this->clientUrl);
        $stmt->bindParam(":clientComment", $this->clientComment);
        $stmt->bindParam(":clientPhoto", $this->clientPhoto);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);
    
       
         // execute query
         if($stmt->execute()){
            return true;
        }
      
        return false;
    }



    function update_exam(){
  
        // query to insert record
        $query = "UPDATE 
                    " . $this->table_name . "
                SET
                   exam_name=:exam_name,
                   type=:type,
                   amount=:amount, 
                   eligibility=:eligibility,
                   age=:age,
                   total_post=:total_post,
                   exam_date_start=:exam_date_start,
                   exam_date_end=:exam_date_end,
                   result_date=:result_date,
                   admit_card_date=:admit_card_date,
                   updated_on=:updated_on,
                   updated_by=:updated_by 
                   ";
                          
        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->exam_name=htmlspecialchars(strip_tags($this->exam_name));
        $this->type=htmlspecialchars(strip_tags($this->type));
        $this->amount=htmlspecialchars(strip_tags($this->amount));
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->total_post=htmlspecialchars(strip_tags($this->total_post));
        $this->eligibility=htmlspecialchars(strip_tags($this->eligibility));
        $this->exam_date_end=htmlspecialchars(strip_tags($this->exam_date_end));
        $this->exam_date_start=htmlspecialchars(strip_tags($this->exam_date_start));
        $this->admit_card_date=htmlspecialchars(strip_tags($this->admit_card_date));
        $this->result_date=htmlspecialchars(strip_tags($this->result_date));
        $this->updated_by=htmlspecialchars(strip_tags($this->updated_by));
        $this->updated_on=htmlspecialchars(strip_tags($this->updated_on));
        
        //bind values
        $stmt->bindParam(":exam_name", $this->exam_name);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":total_post", $this->total_post);
        $stmt->bindParam(":eligibility", $this->eligibility);
        $stmt->bindParam(":exam_date_end", $this->exam_date_end);
        $stmt->bindParam(":exam_date_start", $this->exam_date_start);
        $stmt->bindParam(":admit_card_date", $this->admit_card_date);
        $stmt->bindParam(":result_date", $this->result_date);
        $stmt->bindParam(":updated_by", $this->updated_by);
        $stmt->bindParam(":updated_on", $this->updated_on);
        
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }


   function delete_exam(){
  
    // delete query
    $query = " DELETE FROM " . $this->table_name . " 
    WHERE id= ? ";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
  
    // bind id of record to delete
    $stmt->bindParam(1, $this->id);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}


 }
?>