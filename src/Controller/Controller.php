<?php

namespace Controller;

class Controller{
    
    public function render($path_view, $assign = array()){
        foreach($assign as $var_name => $value){
            ${$var_name} = $value;
        }
        include "../src/views/layout.html.php";
    }
    
    public function getUserConnected(){
        if(isset($_SESSION['id_user_connected'])){
            return \Model\User::findById($_SESSION['id_user_connected']);            
        }else{
            return null;
        }
    }

}

