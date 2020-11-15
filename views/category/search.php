<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Поиск: "<?= $search ?>"</h4>
        <div class="site-pagination">
            <a href="<?= \yii\helpers\Url::home() ?>">Главная</a> /
            <span>Поиск</span> /
        </div>
    </div>
</div>
<!-- Page info end -->

<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">
            <?php if(!empty($products)): ?>
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="filter-widget">
                            <h2 class="fw-title">Категории</h2>
                            <ul class="category-menu">
                                    <li><a href="#">Женщинам</a>
                                            <ul class="sub-menu">
                                                    <li><a href="#">Платья Миди<span>(2)</span></a></li>
                                                    <li><a href="#">Платья Макси<span>(56)</span></a></li>
                                                    <li><a href="#">Выпускные Платья<span>(36)</span></a></li>
                                                    <li><a href="#">Маленькие Черные Платья<span>(27)</span></a></li>
                                                    <li><a href="#">Мини-платья<span>(19)</span></a></li>
                                            </ul>
                                    </li>
                                    <li><a href="#">Мужчинам</a>
                                            <ul class="sub-menu">
                                                    <li><a href="#">Платья Миди<span>(2)</span></a></li>
                                                    <li><a href="#">Платья Макси<span>(56)</span></a></li>
                                                    <li><a href="#">Выпускные Платья<span>(36)</span></a></li>
                                            </ul></li>
                                    <li><a href="#">Детям</a></li>
                                    <li><a href="#">Сумки и Кошельки</a></li>
                                    <li><a href="#">Очки</a></li>
                                    <li><a href="#">Обувь</a></li>
                            </ul>
                    </div>
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">сортировать по</h2>
                        <div class="price-range-wrap">
                            <h4>Цена</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">Цвет</h2>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" name="cs" id="gray-color">
                                <label class="cs-gray" for="gray-color">
                                    <span>(3)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="orange-color">
                                <label class="cs-orange" for="orange-color">
                                    <span>(25)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="yollow-color">
                                <label class="cs-yollow" for="yollow-color">
                                    <span>(112)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="green-color">
                                <label class="cs-green" for="green-color">
                                    <span>(75)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="purple-color">
                                <label class="cs-purple" for="purple-color">
                                    <span>(9)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="blue-color" checked="">
                                <label class="cs-blue" for="blue-color">
                                    <span>(29)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">Размер</h2>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xs-size">
                                <label for="xs-size">XS</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="s-size">
                                <label for="s-size">S</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="m-size"  checked="">
                                <label for="m-size">M</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="l-size">
                                <label for="l-size">L</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xl-size">
                                <label for="xl-size">XL</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xxl-size">
                                <label for="xxl-size">XXL</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h2 class="fw-title">Бренд</h2>
                        <ul class="category-menu">
                            <li><a href="#">Abercrombie & Fitch <span>(2)</span></a></li>
                            <li><a href="#">Asos<span>(56)</span></a></li>
                            <li><a href="#">Bershka<span>(36)</span></a></li>
                            <li><a href="#">Missguided<span>(27)</span></a></li>
                            <li><a href="#">Zara<span>(19)</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="row">
                        <?php foreach($products as $product): ?>    
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <?php if($product->is_sale): ?>
                                    <div class="tag-sale">ON SALE</div>
                                    <?php endif; ?>
                                    <?php if($product->is_new): ?>
                                    <div class="tag-new">new</div>
                                    <?php endif; ?>
                                    <?= \yii\helpers\Html::img("@web/{$product->img}", ['alt' => $product->title]) ?>
                                    <div class="pi-links">
                                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id]) ?>" class="add-card">
                                            <i class="flaticon-bag"></i>
                                            <span>В КОРЗИНУ</span>
                                        </a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>$<?= $product->price ?></h6>
                                    <p><?= $product->title ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <div class="text-center w-100 pt-3">
                            <button class="site-btn sb-line sb-dark">ЗАГРУЗИТЬ ЕЩЕ</button>
                        </div>
                    </div>
                </div>
            <?php else: ?>
            <div class="text-center w-100 pt-3">
                <h2>По запросу ничего не найдено...</h2>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Category section end -->
