<?php

namespace Controller;
use View\View;
class ServiceController{

    private $view;
    function __construct(){
        $this->view = new View(__DIR__ . '/../resourses');
    }


    public function service(){
        $this->view->renderHtml('delivery.php');
    }


}

