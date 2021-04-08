<?php
use libs\system\Controller;
class UserRolesController extends Controller
{
    private $data;

    public function __construct()
    {
        parent::__construct();
        session_start();
        if(isset( $_SESSION['user']))
        {
                 
            $this->data['user'] = $_SESSION['user'];

        }else{
            $this->view->redirect('login');
        }
    
    }
    public function liste(){  
        return $this->view->load("userroles/liste", $this->data); 
    }  

}
?>