<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<div class="hs-item set-bg" data-setbg="img/bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-white">
						<span>Новые Поступления</span>
						<h2>джинсовая куртка</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						<a href="#" class="site-btn sb-line">ПРОСМОТР</a>
						<a href="#" class="site-btn sb-white">ДОБАВИТЬ В КОРЗИНУ</a>
					</div>
				</div>
				<div class="offer-card text-white">
					<span>от</span>
					<h2>$29</h2>
					<p>КУПИТЬ!</p>
				</div>
			</div>
		</div>
		<div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-white">
						<span>Новые Поступления</span>
						<h2>джинсовая куртка</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						<a href="#" class="site-btn sb-line">ПРОСМОТР</a>
						<a href="#" class="site-btn sb-white">ДОБАВИТЬ В КОРЗИНУ</a>
					</div>
				</div>
				<div class="offer-card text-white">
					<span>от</span>
					<h2>$29</h2>
					<p>КУПИТЬ!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="slide-num-holder" id="snh-1"></div>
	</div>
</section>
<!-- Hero section end -->

<!-- Features section -->
<section class="features-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 p-0 feature">
				<div class="feature-inner">
					<div class="feature-icon">
						<img src="img/icons/1.png" alt="#">
					</div>
					<h2>Быстрые Безопасные Платежи</h2>
				</div>
			</div>
			<div class="col-md-4 p-0 feature">
				<div class="feature-inner">
					<div class="feature-icon">
						<img src="img/icons/2.png" alt="#">
					</div>
					<h2>Премиум Продукты</h2>
				</div>
			</div>
			<div class="col-md-4 p-0 feature">
				<div class="feature-inner">
					<div class="feature-icon">
						<img src="img/icons/3.png" alt="#">
					</div>
					<h2>Бесплатная и Быстрая Отправка</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Features section end -->

<!-- letest product section -->
<?php if(!empty($last_products)): ?>
<section class="top-letest-product-section">
	<div class="container">
		<div class="section-title">
			<h2>ПОСЛЕДНИЕ ПРОДУКТЫ</h2>
		</div>
		<div class="product-slider owl-carousel">
                    <?php foreach ($last_products as $last_product): ?>
                        <div class="product-item">
                                <div class="pi-pic">
                                    <?php if($last_product->is_new): ?>
                                    <div class="tag-new">New</div>
                                    <?php endif; ?>
                                    <?= \yii\helpers\Html::img("@web/products/{$last_product->img}", ['alt' => $last_product->title]) ?>
                                    <div class="pi-links">
                                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $last_product->id]) ?>" class="add-card">
                                            <i class="flaticon-bag"></i>
                                            <span>В КОРЗИНУ</span>
                                        </a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                        <h6>$<?= $last_product->price ?></h6>
                                        <p><?= $last_product->title ?></p>
                                </div>
                        </div>
                    <?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<!-- letest product section end -->

<!-- Product filter section -->
<section class="product-filter-section">
	<div class="container">
		<div class="section-title">
			<h2>ОБЗОР САМЫХ ПРОДАВАЕМЫХ ПРОДУКТОВ</h2>
		</div>
		<ul class="product-filter-menu">
			<li><a href="#">ТОПЫ</a></li>
			<li><a href="#">КОМБИНЕЗОНЫ</a></li>
			<li><a href="#">ЖЕНСКОЕ БЕЛЬЕ</a></li>
			<li><a href="#">ДЖИНСЫ</a></li>
			<li><a href="#">ПЛАТЬЯ</a></li>
			<li><a href="#">ПАЛЬТО</a></li>
			<li><a href="#">ДЖЕМПЕРЫ</a></li>
			<li><a href="#">ЛЕГИНСЫ</a></li>
		</ul>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/5.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$28,00</h6>
						<p>Черный Топ</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-sale">ON SALE</div>
						<img src="./img/product/6.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$25,49</h6>
						<p>Белый топ</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/7.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,69</h6>
						<p>Женские Джинсы</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/8.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$42,99</h6>
						<p>Пляжное Платье</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/9.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$22,49</h6>
						<p>Черная Майка</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/10.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$29,49</h6>
						<p>Черная Блузка</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/11.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$39,99</h6>
						<p>Белая Блузка</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/12.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В КОРЗИНУ</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$46,99</h6>
						<p>Вечернее Платье</p>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center pt-5">
			<button class="site-btn sb-line sb-dark">ЗАГРУЗИТЬ ЕЩЕ</button>
		</div>
	</div>
</section>
<!-- Product filter section end -->

<!-- Banner section -->
<section class="banner-section">
	<div class="container">
		<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
			<div class="tag-new">NEW</div>
			<span>Новые Поступления</span>
			<h2>ПЛЯЖНОЕ ПЛАТЬЕ</h2>
			<a href="#" class="site-btn">КУПИТЬ</a>
		</div>
	</div>
</section>
<!-- Banner section end  -->