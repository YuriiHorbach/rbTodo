<?php

class Auth{

    public $db;

    public function __construct(QueryBuilder $db){
        $this->db = $db;

    }

    public function register($email, $password){

        $this->db->store('users', [
            'email'=> $email,
            'password' => md5($password)
        ]);
    }

    public function login($email, $password){
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password LIMIT 1";
        $statement = $this->db->pdo->prepare($sql);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if($user){
            $_SESSION['user'] = $user;
            return true;
        }
        return false;
    }


    public function logout(){
        unset($_SESSION['user']);
    }

    public function check(){
       if(isset($_SESSION['user'])){
           return true;
       }
       return false;
    }
    public function currentUser(){
       if(isset($_SESSION['user'])){
           return $_SESSION['user'];
       }
    }

    public function banUser(){
       if($this->currentUser()){
           echo 'You are banned!';
       }
    }

    public function unBanUser(){
       if($this->currentUser()){
           echo 'You are unbanned!';
           echo $this->currentUser(['email']);
       }
    }

    public function removeUser($email){
        $sql = "DELETE FROM users WHERE email = :email";
        $statement = $this->db->pdo->prepare($sql);
        $statement->bindParam(':email', $email);
        $statement->execute();
        echo 'User with email '.$email.' has been deleted';
    }

}