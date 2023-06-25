<?php
namespace Calculator;
use Delivery\Delivery;

class Calculator{

    static function Calc($company,$weight){
        if($company === 'TransCompany'){
            return Delivery::TransCompany($weight);
        }
        elseif($company === 'PackGroup')
        {
           return Delivery::PackGroup($weight);
        }
        else return "<span class='text-danger'>Choose a company</span>";
    }
}