@extends('layouts.main')

@section('content')

{{--<section class="orders" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; padding: 40px; background-color: #f5f5f7;">--}}
{{--    <h2 style="font-weight: 600; font-size: 28px; margin-bottom: 24px;">Мои заказы</h2>--}}
{{--    <div class="order-card" style="display: flex; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); overflow: hidden; margin-bottom: 24px; transition: box-shadow 0.3s;">--}}
{{--        <!-- Изображение товара -->--}}
{{--        <div style="flex: 1 1 25%; max-width: 25%;">--}}
{{--            <img src="{{ asset('images/товар.jpg') }}" alt="Товар" style="width: 100%; height: auto; display: block;">--}}
{{--        </div>--}}
{{--        <!-- Информация о товаре и заказе -->--}}
{{--        <div style="flex: 1 1 75%; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">--}}
{{--            <!-- Название и описание товара -->--}}
{{--            <div>--}}
{{--                <h3 style="margin: 0 0 8px; font-size: 20px; font-weight: 600;">Apple MacBook Pro 16"</h3>--}}
{{--                <p style="margin: 0 0 16px; color: #555;">Производительность и дизайн в гармонии. Новый MacBook Pro оснащен M2 Max, который позволяет вам делать всё быстрее и лучше.</p>--}}
{{--            </div>--}}
{{--            <!-- Данные заказа -->--}}
{{--            <div style="display: flex; justify-content: space-between; align-items: center;">--}}
{{--                <div>--}}
{{--                    <p style="margin: 0; font-size: 14px; color: #888;"><strong>№ заказа:</strong> 12345</p>--}}
{{--                    <p style="margin: 4px 0 0; font-size: 14px; color: #888;"><strong>Дата:</strong> 01.10.2023</p>--}}
{{--                </div>--}}
{{--                <div style="text-align: right;">--}}
{{--                    <p style="margin: 0; font-size: 16px; font-weight: 600;">15 999,00 ₽</p>--}}
{{--                    <span style="display: inline-block; padding: 4px 12px; background-color: #0071e3; color: #fff; border-radius: 20px; font-size: 12px;">В процессе</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Кнопка подробнее -->--}}
{{--            <div style="margin-top: 16px;">--}}
{{--                <button style="background: none; border: 2px solid #0071e3; border-radius: 20px; padding: 8px 16px; font-size: 14px; cursor: pointer; color: #0071e3; transition: background-color 0.3s;"--}}
{{--                        onmouseover="this.style.backgroundColor='#0071e3'; this.style.color='#fff';"--}}
{{--                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#0071e3';">--}}
{{--                    Подробнее--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Можно добавить больше карточек по аналогии -->--}}
{{--</section>--}}

<!-- Секция "Мои заказы" -->
<section class="orders">
    <h2>Мои заказы:</h2>
    <!-- Карточка заказа -->
    <div class="order-card">
        <!-- Изображение товара -->
        <div class="order-image">
            <img src="{{ asset('/assets/img/product-1.jpg') }}" alt="Товар">
        </div>
        <!-- Информация о товаре и заказе -->
        <div class="order-info">
            <div>
                <h3>Spring Keeper</h3>
                <p class="description">Эстетика свежести и легкости. Украсьте интерьер изящной ноткой прозрачности.</p>
            </div>
            <div class="order-details">
                <div>
                    <p><strong>№ заказа:</strong> 12345</p>
                    <p><strong>Дата:</strong> 30.05.2025</p>
                </div>
                <div style="text-align: right;">
                    <p class="price">8 499,99 ₽</p>
                    <span class="status-badge">Новый</span>
                </div>
            </div>
            <div style="margin-top: 16px;">
                <button class="more-btn">Подробнее</button>
            </div>
        </div>
    </div>

    <div class="order-card">
        <!-- Изображение товара -->
        <div class="order-image">
            <img src="{{ asset('/assets/img/product-3.jpg') }}" alt="Товар">
        </div>
        <!-- Информация о товаре и заказе -->
        <div class="order-info">
            <div>
                <h3>Smudge Kit</h3>
                <p class="description">Искусство ароматерапии. Пусть ваш дом наполняется нежностью и спокойствием.</p>
            </div>
            <div class="order-details">
                <div>
                    <p><strong>№ заказа:</strong> 13254</p>
                    <p><strong>Дата:</strong> 30.05.2025</p>
                </div>
                <div style="text-align: right;">
                    <p class="price">2 250,00 ₽</p>
                    <span class="status-badge">Новый</span>
                </div>
            </div>
            <div style="margin-top: 16px;">
                <button class="more-btn">Подробнее</button>
            </div>
        </div>
    </div>
</section>

<!-- Модальное окно -->
<div id="orderModal">
    <div class="modal-content">
        <button id="closeModal" class="close-cross">&times;</button>
        <h3>Детали заказа</h3>
        <ul>
            <li>ФИО покупателя:<span id="detailProduct"></span></li>
            <li>Комментарий покупателя:<span id="detailQuantity"></span></li>
        </ul>
    </div>
</div>

@endsection
