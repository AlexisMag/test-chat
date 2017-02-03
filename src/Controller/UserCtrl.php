<?php

namespace Controller;

class UserCtrl extends Controller{
    
    //Page de connexion
    public function login(){
        $this->render("user/login.html.php");
    }
    
    //Page d'inscription
    public function subscribe(){
        $this->render("user/subscribe.html.php");
    }
    
    public function connect($user = null){        
        if(!isset($user)){
            $user = \Model\User::findForConnection($_POST['pseudo'], $_POST['password']);            
        }
        
        //Connection OK
        if(isset($user)){
            $_SESSION['user'] = $user;            
            header('Location: /chat');
        }else{
            header('Location: /login');
        }
    }
    
    public function newAccount(){
        if(\Model\User::pseudoExists($_POST['pseudo'])){
            header('Location: /subscribe');
            exit();
        }        
        $user = new \Model\User;
        $user->pseudo = $_POST['pseudo'];
        $user->setPassword($_POST['password']);
        $user->insert();
        $this->connect($user);
    }
    
}
