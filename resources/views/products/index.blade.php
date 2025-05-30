@extends('layouts.main')

@section('content')
    <section class="as-container-column as-columns--1up as-banner as-banner--top">
        <div class="column-item">
            <div class="as-banner-cont">
                <div class="as-banner-image as-banner-image--top"></div>
                <div class="as-banner-content"></div>
            </div>
        </div>
    </section>

    <section class="section" id="products">
        <h2>Специально для вас.</h2>
        <div class="products" style="display:flex; overflow-x:auto; gap:20px; padding:10px 0;">
            <!-- Пример товаров/продуктов с изображениями -->
            <div class="product">
                <img src="{{ asset('/assets/img/product-1.jpg') }}" alt="Продукт 1"/>
                <h3>Spring Keeper</h3>
                <p>Эстетика свежести и легкости. Украсьте интерьер изящной ноткой прозрачности.</p>
                <div class="product-buttons">
                    <button class="btn">Подробнее</button>
                    <button class="btn">Купить</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('/assets/img/product-3.jpg') }}" alt="Продукт 3"/>
                <h3>Smudge Kit</h3>
                <p>Искусство ароматерапии. Пусть ваш дом наполняется нежностью и спокойствием.</p>
                <div class="product-buttons">
                    <button class="btn">Подробнее</button>
                    <button class="btn">Купить</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('/assets/img/product-2.jpg') }}" alt="Продукт 2"/>
                <h3>Spiritual Oracle</h3>
                <p>Настоящий символ традиций. Наслаждайтесь насыщенным вкусом каждого глотка.</p>
                <div class="product-buttons">
                    <button class="btn">Подробнее</button>
                    <button class="btn">Купить</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('/assets/img/product-4.jpg') }}" alt="Продукт 4"/>
                <h3>Japandi Lights</h3>
                <p>Японский минимализм и скандинавский стиль. Просто и аутентично.</p>
                <div class="product-buttons">
                    <button class="btn">Подробнее</button>
                    <button class="btn">Купить</button>
                </div>
            </div>
        </div>
    </section>
@endsection
