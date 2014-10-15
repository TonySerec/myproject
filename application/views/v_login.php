<h3>Вход</h3>
<?=Form::open('auth/login');?>
<?=Form::label('username','login');?>
<?=Form::input('username','');?><br/>
<?=Form::label('password','Пароль');?>
<?=Form::password('password','');?><br/>
<?=Form::submit('submit','Войти');?>
<?=Form::close();?>