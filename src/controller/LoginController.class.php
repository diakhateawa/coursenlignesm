<?php
use libs\system\Controller;
use src\model\UserRepository;
class LoginController extends Controller
{
    public function __construct()
    {
        parent:: __construct();

    }
    
    public function index()
    {
        return $this->view->load("login");//Pour les views direct
    }

    public function logon()
    {
     $userdb = new UserRepository();
        try{
            if(isset($_POST)){
                extract($_POST);
                $user = $userdb->getLogin($email, $password);
                if($user != null)
                {
                    session_start();
                    $roles = array();
                    //echo $user->getNom();
                    
                        foreach($user->getRoles() as $role)
                        {
                            $roles[] = $role;

                        }
                        $user->setRoles($roles);
                            
                    $_SESSION['user'] = $user;

                    return $this->view->redirect("Welcome");//Pour les controlleurs
                }
            }
        }catch(Exception $ex)
        {
            return $this->view->redirect("Login");
        }
     
    }
    public function logout()
    {
        session_start();
         $_SESSION['user'] = '';
         session_destroy();
        return $this->view->load("login");

    }

    
}

?>
