<?php

class Controller
{
    function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
