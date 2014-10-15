<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$title;?></title>
  <meta charset="utf-8">
  <?foreach($styles as $style):?>
  <?=HTML::style($style);?>
  <?endforeach;?>
  <?foreach($scripts as $script):?>
  <?=HTML::script($script);?>
  <?endforeach;?>
  <!--[if lt IE 7]>
  	<?//=HTML::style('media/css/ie/ie6.css')?>
  <![endif]-->
  <!--[if lt IE 9]>
  	<?//=HTML::script('media/js/html5.js')?>
    <?//=HTML::script('media/js/IE9.js')?>
  <![endif]-->
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
    	<h1><?=HTML::anchor('index','LFA-corporation')?></h1>
      <nav>
        <ul>
          <li><?=HTML::anchor('index','Home')?></li>
          <li><?=HTML::anchor('about','About')?></li>
          <li><?=HTML::anchor('product','Products')?></li>
          <li><?=HTML::anchor('vacancy','Vacancy')?></li>
          <li><?=HTML::anchor('contact','Contact')?></li>
          <!--<li><?=HTML::anchor('0/index/auth','Reg')?></li>-->
        </ul>
      </nav>
    </div>
	</header>
  <!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
      	<li><?=HTML::image('media/images/slide44.jpg')?></li>
        <li><?=HTML::image('media/images/slide33.jpg')?></li>
        <li><?=HTML::image('media/images/slide55.jpg')?></li>
        <li><?=HTML::image('media/images/slide11.jpg')?></li>
		<li><?=HTML::image('media/images/slide22.jpg')?></li>
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
		<!-- aside -->
          <aside>
			<?if(Auth::instance()->logged_in()):?>
			<?$users=Auth::instance()->get_user();?>
			Пользователь: <em><b><?=$users->username;?></em></b><br/>
			<b><?=HTML::anchor('auth/cabinet','Кабинет')?></b><br/>
			<b><?=HTML::anchor('auth/logout','Выход')?></b><br/>
			<?else:?>
			<br/>
			<b><?=HTML::anchor('auth/index','Регистрация')?></b><br/>
			<b><?=HTML::anchor('auth/login','Вход')?></b><br/>
			<?endif;?>
            <h2>Recent <span>News</span></h2>
            <!-- .news -->
            <ul class="news">
            	<li>
              	<figure><strong>22</strong>June</figure>
                <h3><a href="#">Sed ut perspiciatis unde</a></h3>
                Domnis iste natus error sit voluptam accusa doloremque <a href="#">...</a>
              </li>
              <li>
              	<figure><strong>09</strong>June</figure>
                <h3><a href="#">Totam rem aperiam</a></h3>
                Eaqueipsa quae abillo inventoretis et quasi architecto beatae <a href="#">...</a>
              </li>
              <li>
              	<figure><strong>31</strong>May</figure>
                <h3><a href="#">Inventore veritatis et quasi</a></h3>
                Architecto beatae vitae dicta sunt explicabo <a href="#">...</a>
              </li>
              <li>
              	<figure><strong>25</strong>May</figure>
                <h3><a href="#">Nemo enim ipsam</a></h3>
                Voluptatem quia voluptas sit asper natur aut odit aut fugit <a href="#">...</a>
              </li>
            </ul>
            <!-- /.news -->
          </aside>
          <!-- content -->
          <section id="content">
            <article>
			<?=$block_center;?>
			<figure><?=HTML::image('media/images/banner111.jpg')?></figure>
			<figure><?=HTML::image('media/images/banner222.jpg')?></figure>
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer>
    <div class="container">
    	<div class="wrapper">
        <div class="fleft">&copy; LFAcorporation@gmail.com</div>
        <div class="fright"></div>
      </div>
    </div>
  </footer>
</body>
</html>
