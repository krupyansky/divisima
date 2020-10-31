<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Корзина</h4>
        <div class="site-pagination">
            <a href="<?= \yii\helpers\Url::home() ?>">Главная</a> /
            <span>Корзина</span>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- cart section end -->

<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <?php if(!empty($session['cart'])): ?>
            <div class="col-lg-8">
                <div class="cart-table">
                    <div class="overlay">
                    </div>
                    <h3>Корзина</h3>
                    <div class="cart-table-warp">    
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-th">Продукт</th>
                                    <th class="quy-th">Количество</th>
                                    <!--<th class="size-th">Размер</th>-->
                                    <th class="total-th">Стоимость</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($session['cart'] as $id => $item): ?>
                                <tr>
                                        <td class="product-col">
                                            <a href="<?= yii\helpers\Url::to(['product/view', 'id' => $id]) ?>">
                                                <?= \yii\helpers\Html::img("@web/products/{$item['img']}", ['alt' => $item['title']]) ?>
                                            </a>
                                                <div class="pc-title">
                                                        <h4><?= $item['title'] ?></h4>
                                                        <p>$<?= $item['price'] ?></p>
                                                </div>
                                        </td>
                                        <td class="quy-col">
                                                <div class="quantity">
                                <div class="pro-qty" data-id="<?= $id ?>">
                                                                <input type="text" value="<?= $item['qty'] ?>">
                                                        </div>
                                </div>
                                        </td>
                                        <!--<td class="size-col"><h4>Size M</h4></td>-->
                                        <td class="total-col"><h4>$<?= $item['qty'] * $item['price'] ?></h4></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost">
                            <h6>Стоимость <span>$<?= $session['cart.sum'] ?></span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Введите промо код">
                    <button>Нажать</button>
                </form>
                <a href="<?= yii\helpers\Url::to(['cart/checkout']) ?>" class="site-btn">Перейти к оформлению</a>
                <a href="<?= yii\helpers\Url::home(); ?>" class="site-btn sb-dark">Продолжить покупки</a>
            </div>
            <?php else: ?>
                <h3>Корзина пуста...</h3>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- cart section end -->

<!-- Related product section -->
<section class="related-product-section">
    <div class="container">
        <div class="section-title text-uppercase">
                <h2>Продолжить покупки</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="./img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                            <div class="pi-pic">
                                    <img src="./img/product/5.jpg" alt="">
                                    <div class="pi-links">
                                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                            </div>
                            <div class="pi-text">
                                    <h6>$35,00</h6>
                                    <p>Flamboyant Pink Top </p>
                            </div>
                    </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                            <div class="pi-pic">
                                    <img src="./img/product/9.jpg" alt="">
                                    <div class="pi-links">
                                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                            </div>
                            <div class="pi-text">
                                    <h6>$35,00</h6>
                                    <p>Flamboyant Pink Top </p>
                            </div>
                    </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                            <div class="pi-pic">
                                    <img src="./img/product/1.jpg" alt="">
                                    <div class="pi-links">
                                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                            </div>
                            <div class="pi-text">
                                    <h6>$35,00</h6>
                                    <p>Flamboyant Pink Top </p>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Related product section end -->