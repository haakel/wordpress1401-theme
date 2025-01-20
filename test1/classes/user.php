<?php

class user{
private object $db;
private string $usertable;
public string $msg="" ;
public bool $error = false;
public bool $success = false;

public function __construct(){
global $wpdb;
$this->db= $wpdb;
$this->usertable = $this->db->prefix."testamozesh";

}
public function save(string $name,string $family,string $email,string $bio):bool|string{
    
    // if(!empty($_POST["name"]) &&!empty($_POST["lastname"])&&!empty($_POST["email"])&&!empty($_POST["bio"]) ){
       foreach ($_POST as $field) {
           if(empty($field)){
            $this->error= true;
            $this->msg = "تمامی فیلد ها تکمیل گردد";
            return false;   
        }
       }
       if(!is_email($_POST["email"])){
        $this->error = true;
        $this->msg = "ایمیل صحیح وارد کنید!";        
        return false; 
       }
       $name = sanitize_text_field($_POST["name"]);
       $lastname = sanitize_text_field($_POST["lastname"]);
       $email = sanitize_text_field($_POST["email"]);
       $bio = sanitize_textarea_field($_POST["bio"]);
       $data = ["name"=>$name,"lastname"=>$lastname,"email"=>$email,"bio"=>$bio];
       $format= ["%s","%s","%s","%s"];
       $stmt =$this->db->insert($this->usertable,$data,$format);
       if($stmt){
        $this->success = true;
        $this->msg = "ثبت نام انجام گردید!";
        return true;
       }else{
        $this->error = true;
        $this->msg = "مشکلی در ثبت اطلاعات صورت گرفته است: " . $this->db->last_error;        
        return false; 
       }
    // }else{

    // }
    
}

}