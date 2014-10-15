<h3>Регистрация</h3>
<?if($errors):?>
    <?=Debug::vars($errors);?>
<?endif;?>
<?=Form::open('auth/index');?>
<?=Form::label('username','login');?>
<?=Form::input('username',$data['username']);?><br/>
<?=Form::label('email','E-mail');?>
<?=Form::input('email',$data['email']);?><br/>
<?=Form::label('password','Пароль');?>
<?=Form::password('password',$data['password']);?><br/>
<?=Form::label('password_confirm','Повтор пароля');?>
<?=Form::password('password_confirm',$data['password_confirm']);?><br/>
<?=Form::submit('submit','Зарегистрироваться');?>
<?=Form::close();?>