<?php 

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <!-- Favicon -->
    <link href="<?= Url::to('@web/img/favicon.ico') ?>" rel="shortcut icon"/>

    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="<?= Url::home() ?>" class="site-logo">
                            <?= Html::img("@web/img/logo.png", ['alt' => 'Divisima']) ?>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form" action="<?= Url::to(['category/search']) ?>" method="get">
                            <input type="text" name="search" placeholder="Поиск ...">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="#">Авторизоваться</a> | <a href="#">Создать аккаунт</a>
                            </div>                           
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span class="cart-qty">
                                        <?= $_SESSION['cart.qty'] ?? '0' ?>
                                    </span>
                                </div>
                                <!-- <a href="#">Корзина</a>-->
                                <button onclick="getCart()" style="padding:0; font-size: 14px;" type="button" class="btn" data-toggle="modal" data-target="#modal-cart">
                                    Корзина
                                </button>
                            </div>
                            <div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                                            <a href="<?= Url::to(['cart/view']) ?>" class="btn btn-success">Оформить заказ</a>
                                            <button onclick="clearCart()" type="button" class="btn btn-danger">Очистить корзину</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->render('//layouts/include/menu_main') ?>
    </header>
    <!-- Header section end -->

    <?= $content ?>

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html">
                                    <?= Html::img("@web/img/logo-light.png", ['alt' => 'Logo Light']) ?>
                                </a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>О нас</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<?= Html::img("@web/img/cards.png", ['alt' => 'About Us']) ?>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Меню</h2>
						<ul>
							<li><a href="">О нас</a></li>
							<li><a href="">Отслеживание заказа</a></li>
							<li><a href="">Возврат</a></li>
							<li><a href="">Вакансии</a></li>
							<li><a href="">Доставка</a></li>
							<li><a href="">Блог</a></li>
						</ul>
						<ul>
							<li><a href="">Партнеры</a></li>
							<li><a href="">Блогеры</a></li>
							<li><a href="">Поддержка</a></li>
							<li><a href="">Пользовательское соглашение</a></li>
							<li><a href="">Пресса</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Последние записи</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
                                                            <div class="lp-thumb set-bg" data-setbg="<?= Url::to('@web/img/blog-thumbs/1.jpg') ?>"></div>
								<div class="lp-content">
									<h6>какую обувь надеть</h6>
									<span>21 октября, 2018</span>
									<a href="#" class="readmore">Читать</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?= Url::to('@web/img/blog-thumbs/2.jpg') ?>"></div>
								<div class="lp-content">
									<h6>Тренды этого года</h6>
									<span>21 октября, 2018</span>
									<a href="#" class="readmore">Читать</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Контакты</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Divisima Company Ltd</p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>Парк Александровский, 1, Санкт-Петербург, 197198</p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+7 (999) 999 99-99</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@email.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
	<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->

	<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
