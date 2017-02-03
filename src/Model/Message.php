<?php

namespace Model;

class Message extends Model{
    
    protected $id_message;
    protected $content;
    protected $timestamp;
    protected $id_user;
    protected $id_user_for;
    
    public static function findLastMessages(){
        $request = "SELECT message.*, pseudo FROM message INNER JOIN user ON (message.id_user = user.id_user) ORDER BY timestamp DESC LIMIT 0, 100";
        $pdo = \Database\Database::getInstance();
        $sth = $pdo->prepare($request);
        $sth->execute();
        $results = $sth->fetchAll();
        
        $messages = array();
        foreach($results as $result){
            $message = new Message;
            $message->assignResults($result);
            $message->pseudo = $result['pseudo'];
            $messages[] = $message;
        }
        $messages = array_reverse($messages);
        
        return $messages;
    }
    
    public function insert(){
        $pdo = \Database\Database::getInstance();
        $request = "INSERT INTO message (content, timestamp, id_user, id_user_for) VALUES (:content, :timestamp, :id_user, :id_user_for)";
        $stmt = $pdo->prepare($request);
        
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':timestamp', $this->timestamp);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':id_user_for', $this->id_user_for);
        
        $stmt->execute();
        $this->id_message = $pdo->lastInsertId();        
    }
    
}