<?php
require_once ('src/controllers/Controller.php');
use src\controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return $this->view('index.twig');        
    }    
}
