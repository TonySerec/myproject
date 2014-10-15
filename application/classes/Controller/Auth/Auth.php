<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Auth extends Controller_Base {

    public function before(){
        parent::before();
    }
    public function action_index(){
        
		if($_POST){
            $data=Arr::extract($_POST,array('username',
                                            'email',
                                            'password',
                                            'password_confirm'));
            $users=ORM::factory('user');
            try{
                $users->create_user($data,array('username',
                                                'email',
                                                'password'));
                $role=ORM::factory('role')
                      ->where('name','=','login')
                      ->find();
                $users->add('roles',$role);
                //$this->redirect('/');
                $this->action_login();
            }catch(ORM_Validation_Exception $exc){
                $errors=$exc->errors('auth');
            }
        }
        $content=View::factory('v_reg')
                 ->bind('data',$data)
                 ->bind('errors',$errors);
        $this->template->block_center=$content;
		
    }
    public function action_login(){
    if($_POST){
            $status=Auth::instance()->login($_POST['username'],$_POST['password']);
            if($status){
                $this->redirect();
            }else{
                $errors=array('Такой пользователь не существует');
            }
        }
        $content=View::factory('v_login');
        $this->template->block_center=$content;
    }
	public function action_cabinet(){
		$users=Auth::instance()->get_user();
		if($users){
			$content=View::factory('v_users')
                 ->bind('users',$users);
			$this->template->block_center=$content;
		}else{
			$this->redirect('auth/login');
		}
	}
	public function action_logout(){
		$log_out=Auth::instance()->logout();
		$this->redirect();
	}
}
?>