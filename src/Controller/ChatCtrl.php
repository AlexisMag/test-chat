<?php

namespace Controller;

class ChatCtrl extends Controller{    
    
    public function chat($id_user = null){
        if($this->getUserConnected() == null){
            header('Location: /login');
        }
        $messages = \Model\Message::findLastMessages();        
        
        $this->render("chat/chat.html.php", array(
            'messages' => $messages
        ));
    }
    
    public function postMessage($id_user = null){
        $message = new \Model\Message;
        $message->content = htmlentities($_POST['content']);
        $message->id_user = 
        $message->timestamp = time();
        $message->id_user = $this->getUserConnected()->id_user;
        $message->id_user_for = isset($id_user) ? $id_user : 0;
        $message->insert();
        
        header('Location: /chat');
    }
    
    public function ajaxGetMessages(){
        $last_timestamp = isset($_GET['last_timestamp']) ? $_GET['last_timestamp'] : 0;        
        $messages = \Model\Message::findLastMessages($last_timestamp);
        
        include "../src/views/chat/chat_ajax.html.php";
    }
    
}
