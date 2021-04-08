<?php
use libs\system\Controller;
class AccueilController extends Controller
{
    public function __construct()
    {
        parent:: __construct();

    }
    public function index()
    {
        return $this->view->load("accueil");
    }

}
?>