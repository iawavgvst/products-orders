@extends('layouts.main')

@section('content')
<!-- Основной контент -->
<section class="welcome-section">
    <h1>Добро пожаловать в AVGVST GROUP.</h1>
    <p>Здесь вы откроете для себя уникальные элементы декора в современном минимализме с вдохновением из восточной
        культуры. Простота, изящество и гармония — все, что подчеркнет вашу индивидуальность и создаст атмосферу
        спокойствия и утонченности в вашем доме.</p>
    <div style="text-align: center">
        <button class="btn">Узнать больше</button>
    </div>
</section>

    <!-- Раздел с баннером -->
    <section class="banner-section">
        <h2 class="banner-title">Красота — это в первую очередь вы.</h2>
        <div class="banner-background">
            {{--            <a href="#more-info" class="banner-link">Take a closer look</a>--}}
        </div>
    </section>

    <!-- Раздел "Почему мы?" в стиле Apple -->
    <section class="apple-style-section">
        <h2 class="apple-title">Новинка | Puzzle Table.</h2>

        <div class="tabs">
            <div class="tab active" data-index="0">Эстетика</div>
            <div class="tab" data-index="1">Формы</div>
            <div class="tab" data-index="2">Материал</div>
        </div>

        <div class="tab-content active" data-index="0">
            <img src="{{ asset('/assets/img/3.jpg') }}" alt="Puzzle Table" class="tab-image"/>
            <div class="tab-description">
                <h3>Необычный дизайн</h3>
                <p>Сочетает в себе минимализм и холодную классику. Его дизайн вдохновлен концепцией соединения
                    элементов, создавая эффект головоломки, где каждый кусочек словно вписывается в общую картину.</p>
            </div>
        </div>

        <div class="tab-content" data-index="1">
            <img src="{{ asset('/assets/img/1.jpg') }}" alt="Puzzle Table" class="tab-image"/>
            <div class="tab-description">
                <h3>Различные формы</h3>
                <p>Форма и конструкция выполнены так, чтобы подчеркнуть оригинальность идеи: каждый кусочек имеет
                    уникальную форму, что позволяет соединять их по желанию или создавать динамичную композицию..</p>
            </div>
        </div>

        <div class="tab-content" data-index="2">
            <img src="{{ asset('/assets/img/2.jpg') }}" alt="Puzzle Table" class="tab-image"/>
            <div class="tab-description">
                <h3>Прочный материал</h3>
                <p>Индуастриальный шарм цинка в сочетании с почерневшим дубом, обладающим богатой глубиной оттенка и
                    характерной структурой, превращает стол в элегантный арт-объект.</p>
            </div>
        </div>
    </section>

        <!-- Раздел "Создай свое понятие красоты" -->
        <section class="beauty-creation">
            <h2>Создай свое понятие прекрасного.</h2>
            <div class="content-wrapper">
                <div class="text-section">
                    <div class="item">
                        <h3>Bonsai Art Object</h3>
                        <!-- Убираем кнопку и скрытый блок -->
                        <p> Эффектное произведение искусства, которое погружает в атмосферу гармонии и спокойствия. Его
                            изящные линии и природные мотивы создают уникальный акцент в интерьере.</p>
                    </div>
                    <div class="item">
                        <h3>Force of Nature</h3>
                        <p>Эти элегантные горшки наполнят ваше пространство живой природой и свежестью. Искусство
                            выращивания маленького сада у вас дома подчеркнет ваш вкус и заботу о природе.</p>
                    </div>
                    <div class="item">
                        <h3>Chabudai Table</h3>
                        <p>Теплый и уютный стол из натурального дерева в азиатской стиле станет центром любого чаепития
                            или беседы. Его простота и качество создают атмосферу уюта и спокойствия.</p>
                    </div>
                    <div class="item">
                        <h3>«Asket» Rug</h3>
                        <p>Мягкий и приятный на ощупь ковер создает ощущение тепла и комфорта. Его узор и текстура
                            делают комнату еще более уютной и эстетичной, не создавая визуальный шум.</p>
                    </div>
                </div>
                <div class="image-section">
                    <img src="{{ asset('/assets/img/example.jpg') }}" alt="iPhone и Mac"/>
                </div>
            </div>
        </section>
@endsection
