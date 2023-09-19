<?php

require_once(ROOT_PATH.'/core/controller.php');

class UserController extends Controller{

    public function index()
    {
        $data = array();
        //$this->load_view('');
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(isset($_POST['username'])&&isset($_POST['password']))
            {
                $user=UserModel::where('email','=',$_POST['username'])
                ->where('password','=',encryptData($_POST['password'],APP_KEY,INIT_VECTOR))
                ->first();
                if($user)
                {
                    $_SESSION['userFullName'] = $user['name'].' '.$user['surname'];
                    $_SESSION['userId'] = $user['id'];
                    $_SESSION['username']=$user->name.' '.$user->surname;
                    $_SESSION['userEmail'] = $user['email'];
                    if($user['user_type_id']==1)
                    {
                        $_SESSION['user_type']='admin';
                        header('Location: /admin');
                    }
                    else{
                        $_SESSION['user_type']='normal';
                        header('Location: /');
                    }
                }
                else
                {
                    $_SESSION['error'] = "Incorrect password or username";
                    header('Location: /login');
                    exit;
                }
            }
            else
            {
                header('Location: /login');
                exit;
            }  
        }
        $model = new UserModel();
        $data = $model->all();
        $this->load_view('login',$data);
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location:  /login');
        exit;
    }

    public function register()
    {
        $data = UserModel::all();
        if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['Submit']))
        {
            $user=array(
                'name'=>$_POST['name'],
                'surname'=>$_POST['surname'],
                'email'=>$_POST['email'],
                'user_type_id'=>2,
                'password'=>encryptData($_POST['password'],APP_KEY,INIT_VECTOR)
            );
            $insert=UserModel::create($user);
            if(!$insert)
            {
                header('Location: /login');
                exit;  
            }
            else
            {
                header('Location: /login');
                exit; 
            } 
        }
        
        $this->load_view('signup',$data);
    }

   
}