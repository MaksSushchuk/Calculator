<?php
namespace Delivery;

class Delivery{

    protected $weight;
     
    static public function TransCompany($weight){
        if($weight >= 10){
            return 100;
        }
        return 20;
    }

    static public function PackGroup($weight){
        return $weight;
    }
}