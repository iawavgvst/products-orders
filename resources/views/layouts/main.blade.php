<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>avgvst group: touching the warm</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/logo.png') }}"/>
    <!-- Используем более нейтральный шрифт, похожий на Apple -->
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Helvetica+Neue&display=swap') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
</head>
<body>

<!-- Header -->
<header>
    <div class="logo-container">
        <!-- Предположим, что у вас есть логотип по ссылке -->
        <a href="{{ route('site.index') }}">
            <img src="{{ asset('/assets/logo.png') }}" alt="avgvst logo"/></a>
    </div>
        <nav>
        <a href="{{ route('products.index') }}">Товары</a>
        <a href="{{ route('orders.index') }}">Мои заказы</a>
        <a href="#">Обратная связь</a>
        <a href="#">Бенефиты</a>
        <a href="#">Свой продукт</a>
    </nav>
</header>

@yield('content')

<!-- Футер -->
<footer>
    <div>&copy; avgvst group, 2025</div>
    <div>🧡 helpcenter@avgroup.com</div>
</footer>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
