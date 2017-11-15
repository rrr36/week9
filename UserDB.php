<?php
require('Database.php');
require('User.php');
class UserDB {

public static function getAllUsers(){

$db = Database::getDB();
echo "<table border = '1'><tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th></tr>";


$query = "select*from accounts";
$statement = $db->prepare($query);
        
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        foreach($rows as $row){
        $user = new User($row['id'],$row['email'],$row['fname'],$row['lname'],$row['phone'],$row['birthday'],$row['gender'],$row['password']);
        $user->setID($row['id']);
        $user->setEmail($row['email']);
        $user->setFname($row['fname']);
        $user->setLname($row['lname']);
        $user->setPhone($row['phone']);
        $user->setBirthday($row['birthday']);
        $user->setGender($row['gender']);
        $user->setPassword($row['password']);
        $user->display();}
        echo "</table>";
        //return $product;
 }
 
public static function deleteUser($ID) {
        $db = Database::getDB();
        $query = 'DELETE FROM accounts
                  WHERE id = :ID';
        $statement = $db->prepare($query);
        $statement->bindValue(':ID', $ID);
        $statement->execute();
        $statement->closeCursor();
    }

 public static function addUser($user) {
        $db = Database::getDB();
        $id = $user->getID();
        $email = $user->getEmail();
        $fname = $user->getFname();
        $lname = $user->getLname();
        $phone = $user->getPhone();
        $birthday = $user->getBirthday();
        $gender = $user->getGender();
        $password = $user->getPassword();
        
        $query = 'INSERT INTO accounts
                     (id, email, fname, lname, phone, birthday, gender, password)
                  VALUES
                     (:user_id, :user_email, :user_fname, :user_lname, :user_phone, :user_birthday, :user_gender, :user_password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_id', $id);
        $statement->bindValue(':user_email', $email);
        $statement->bindValue(':user_fname', $fname);
        $statement->bindValue(':user_lname', $lname);
        $statement->bindValue(':user_phone', $phone);
        $statement->bindValue(':user_birthday', $birthday);
        $statement->bindValue(':user_gender', $gender);
        $statement->bindValue(':user_password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
    
 public static function updatePassword($user) {
        $db = Database::getDB();
        $id = $user->getID();
        $password = $user->getPassword();
        
        $query = 'UPDATE accounts SET password= :user_password WHERE id = :user_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_id', $id);
        $statement->bindValue(':user_password', $password);
        $statement->execute();
        $statement->closeCursor();
 }
}
UserDB::getAllUsers();

?>