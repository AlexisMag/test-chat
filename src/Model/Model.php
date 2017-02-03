<?php
namespace Model;

class Model{
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function assignResults($columns){
        foreach($columns as $column => $value){            
            if(property_exists(get_called_class(), $column)){
                $this->$column = $value;
            }
        }
    }
}
