<?php

/* Freety Indriani Safitri - 193040175 (MVC) */

class Controller{
    
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

}