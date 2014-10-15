<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = 'v_base';
    public function before(){
        parent::before();
        $this->template->title='LFA-corporation';
        $this->template->description='';
        $this->template->styles=array('media/css/reset.css',
                                      'media/css/style.css');
        $this->template->scripts=array('media/js/jquery-1.4.2.min.js',
                                       'media/js/cufon-yui.js',
                                       'media/js/Humanst521_BT_400.font.js',
                                       'media/js/Humanst521_Lt_BT_400.font.js',
                                       'media/js/roundabout.js',
                                       'media/js/roundabout_shapes.js',
                                       'media/js/gallery_init.js',
                                       'media/js/cufon-replace.js');
        $this->template->block_center='';
    }
    public function action_index(){
        if($this->request->param('id')){
            $id=$this->request->param('id');
        }else{
            $id='index';
        }
        $text=ORM::factory('maintext')
              ->where('url','=',$id)
              ->find();
        $content=View::factory('v_index')
                 ->bind('text',$text);
		
        $this->template->block_center=$content;
		//$this->template->reg="<a href='0/index/auth'>Регистрация</a>";
		//$this->template->log="<a href='0/login/auth'>Вход</a>";
    }
    public function action_tovars(){
        $tovars=ORM::factory('tovar')
                ->find_all();
        $content=View::factory('v_tovars')
                 ->bind('tovars',$tovars);
        $this->template->block_center=$content;
    }
}
?>
