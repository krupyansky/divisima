<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Оформление заказа</h4>
        <div class="site-pagination">
            <a href="<?= \yii\helpers\Url::home() ?>">Главная</a> /
            <a href="<?= \yii\helpers\Url::to(['cart/view']) ?>">Корзина</a> /
            <span>Оформление заказа</span>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- checkout section  -->

<section class="checkout-section spad">
	<div class="container">
<!--            <div class="row">
                <?//= \app\widgets\Alert::widget() ?>
            </div>-->
            
		<div class="row">
                    <?php if(!empty($session['cart'])): ?>
                    
			<div class="col-lg-8 order-2 order-lg-1">
                            
                            <?php $form = \yii\widgets\ActiveForm::begin([
                                    'options' => [
                                        'class' => 'checkout-form'
                                    ]
                                ]); ?>
                                <div class="cf-title">Данные покупателя</div>
                                <?= $form->field($order, 'name') ?>
                                <?= $form->field($order, 'email') ?>
                                <?= $form->field($order, 'phone') ?>
                                <?= $form->field($order, 'address') ?>
                                <?= $form->field($order, 'note')->textarea(['rows' => 5]) ?>
                                <?= yii\helpers\Html::submitButton('Оформить заказ', ['class' => 'site-btn submit-order-btn']) ?>
                            <?php \yii\widgets\ActiveForm::end() ?>
<!--				<form class="checkout-form">
                                    
                                        <div class="cf-title">Платежные адрес</div>
                                        <div class="row address-inputs">
                                            <div class="col-md-12">
                                                <input type="text" name="name" id="name" placeholder="Имя">
                                                <input type="text" name="phone" id="phone" placeholder="Номер телефона">
                                                <input type="text" name="email" id="email" placeholder="E-mail">
                                                <input type="text" name="address" id="address" placeholder="Адрес">
                                                <input type="text" name="note" id="note" placeholder="Примечание">
                                            </div>
					</div>
                                        
					<div class="cf-title">Платежные адрес</div>
					<div class="row">
						<div class="col-md-7">
							<p>*Платежная информация</p>
						</div>
						<div class="col-md-5">
							<div class="cf-radio-btns address-rb">
								<div class="cfr-item">
									<input type="radio" name="pm" id="one">
									<label for="one">Использовать постоянный адрес</label>
								</div>
								<div class="cfr-item">
									<input type="radio" name="pm" id="two">
									<label for="two">Использовать другой адрес</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row address-inputs">
						<div class="col-md-12">
							<input type="text" placeholder="Адрес">
							<input type="text" placeholder="Адресная строка 2">
							<input type="text" placeholder="Страна">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Почтовый индекс">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Номер телефона">
						</div>
					</div>
					<div class="cf-title">Информация о доставке</div>
					<div class="row shipping-btns">
						<div class="col-6">
							<h4>Стандарт</h4>
						</div>
						<div class="col-6">
							<div class="cf-radio-btns">
								<div class="cfr-item">
									<input type="radio" name="shipping" id="ship-1">
									<label for="ship-1">Бесплатно</label>
								</div>
							</div>
						</div>
						<div class="col-6">
							<h4>Доставка на следующий день</h4>
						</div>
						<div class="col-6">
							<div class="cf-radio-btns">
								<div class="cfr-item">
									<input type="radio" name="shipping" id="ship-2">
									<label for="ship-2">$3.45</label>
								</div>
							</div>
						</div>
					</div>
					<div class="cf-title">Платеж</div>
					<ul class="payment-list">
						<li>PayPal<a href="#"><img src="img/paypal.png" alt=""></a></li>
						<li>Кредитная / Дебетовая карта<a href="#"><img src="img/mastercart.png" alt=""></a></li>
						<li>Оплата после получения</li>
					</ul>
					<button class="site-btn submit-order-btn">Оформить заказ</button>
				</form>-->
                           
			</div>
			<div class="col-lg-4 order-1 order-lg-2">
				<div class="checkout-cart">
					<h3>Ваша корзина</h3>
					<ul class="product-list">
                                            <?php foreach($session['cart'] as $id => $item): ?>
						<li>
                                                    <div class="pl-thumb">
                                                        <?= \yii\helpers\Html::img("@web/{$item['img']}", ['alt' => $item['title']]) ?>
                                                    </div>
                                                    <h6><?= $item['title'] ?></h6>
                                                    <p>Цена: $<?= $item['price'] ?></p>
                                                    <p>Количество: <?= $item['qty'] ?></p>
						</li>
                                            <?php endforeach; ?> 
					</ul>
					<ul class="price-list">
<!--                                            <li>Сумма<span>$<?//= $session['cart.sum'] ?></span></li>
                                            <li>Доставка<span>$0</span></li>-->
                                            <li class="total">Всего<span>$<?= $session['cart.sum'] ?></span></li>
					</ul>
				</div>
			</div>
                    <?php else: ?>
                        <h3>Корзина пуста...</h3>
                    <?php endif; ?>
		</div>
	</div>
</section>

<!-- checkout section end -->