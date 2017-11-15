<?php
class User{

private $id;
private $email;
private $fname;
private $lname;
private $phone;
private $birthday;
private $gender;
private $pass;
private $users;
private $out;

public function _construct($id1,$email1,$fname1,$lname1,$phone1,$birthday1,$gender1,$pass1) {
  $this->id = $id1;
  $this->email = $email1;
  $this->fname = $fname1;
  $this->lname = $lname1;
  $this->phone = $phone1;
  $this->birthday = $birthday1;
  $this->gender = $gender1;
  $this->pass = $pass1;

} 
public function getID(){
  return $this->id;
  }
  
public function setID($id){
    $this->id = $id;
}

public function getEmail(){
  return $this->email;
  }
  
public function setEmail($email){
    $this->email = $email;
}

public function getFname(){
  return $this->fname;
  }
  
public function setFname($fname){
    $this->fname = $fname;
}

public function getLname(){
  return $this->lname;
  }
  
public function setLname($lname){
    $this->lname = $lname;
}

public function getPhone(){
  return $this->phone;
  }
  
public function setPhone($phone){
    $this->phone = $phone;
}

public function getBirthday(){
  return $this->birthday;
  }
  
public function setBirthday($birthday){
    $this->birthday = $birthday;
    
}

public function getGender(){
  return $this->gender;
  } 

public function setGender($gender){
    $this->gender = $gender;
}

public function getPassword(){
  return $this->password;
  } 

public function setPassword($pass){
    $this->password = $pass;
}

public function display(){

echo "<tr><td>".self::getID()."</td><td>".self::getEmail()."</td><td>".self::getFname()."</td><td>".self::getLname()."</td><td>".self::getPhone()."</td><td>".self::getBirthday()."</td><td>".self::getGender()."</td><td>".self::getPassword()."</td></tr>";
  }
}
?>