<?php

namespace Modules\Admin\Entities\AdminTraits;

trait Property{
    public function getId(){
        return $this->name;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getStatus(){
        return $this->status;
    }
}