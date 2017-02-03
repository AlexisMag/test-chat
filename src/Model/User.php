<?php

namespace Model;

class User extends Model{
    protected $id_user;    
    protected $password;
    protected $pseudo;
    
    public static function findById($id_user){
        $pdo = \Database\Database::getInstance();
        $request = "SELECT * FROM user WHERE id_user = ?";
        $sth = $pdo->prepare($request);
        $sth->execute(array(
            $id_user
        ));
        if($results = $sth->fetch()){
            $user = new User;
            $user->assignResults($results);
            return $user;
        }
        return null;
    }
    
    public static function findForConnection($pseudo, $password){
        $pdo = \Database\Database::getInstance();
        $request = "SELECT * FROM user WHERE pseudo = ? AND password = ?";
        $sth = $pdo->prepare($request);        
        
        $sth->execute(array(
            $pseudo,
            self::crypt($password)
        ));
        if($results = $sth->fetch()){
            $user = new User;
            $user->assignResults($results);
            
            return $user;
        }
        return null;
    }
    
    public static function pseudoExists($pseudo){
        $pdo = \Database\Database::getInstance();
        $request = "SELECT count(id_user) as count FROM user WHERE pseudo = ?";
        $sth = $pdo->prepare($request);
        
        $sth->execute(array(
            $pseudo
        ));
        $result = $sth->fetch();
        
        return $result['count'] > 0;        
    }
    
    public function insert(){
        $pdo = \Database\Database::getInstance();
        $stmt = $pdo->prepare('INSERT INTO user (pseudo, password) VALUES (:pseudo, :password)');
        $stmt->bindParam(':pseudo', $this->pseudo);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
        $this->id_user = $pdo->lastInsertId();
    }
    
    public static function crypt($password){        
        return crypt($password, "salt");
    }
    
    public function setPassword($password){
        $this->password = crypt($password, "salt");
    }
    
    
}