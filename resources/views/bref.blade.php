<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>.MOORE STUDIO - Разработка web cайтав и продвижение в Бишкеке</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ asset('css/animate.css') }}">--}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <meta name="description" content="Мы занимаемся созданием сайтов и интерфейсов,брэндингом, придумываем рекламу и развиваем проекты в digital." />
    <!-- Styles -->

</head>
<body style="text-align:center;">
<div class="p-5mo">
<form action="{{ route('mail') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <p class="zog">Менеджер</p>
    <div class="p-3">
    <label>Менеджер</label></br>
    <input type="text" name="text1" placeholder="Твое имя" class="impumoo" required>
    </div>
        <div class="p-3">
    <label>Телефон</label></br>
    <input type="tel" name="tel" placeholder="Номер телефона" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>E-mail</label></br>
    <input type="email" name="email" placeholder="E-mail" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Дата заполнения брифа</label></br>
    <input type="text" name="text2" placeholder="12.08.2019" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Срок разработки</label></br>
    <input type="text" name="text3" placeholder="35 дней \ до 1 сентября" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Название проекта</label></br>
    <input type="text" name="text4" placeholder="Салон красоты Дива" class="impumoo" required>
    </div>
    
    <p class="zog">Информация о клиенте</p>
    
     <div class="p-3">
    <label>Название компании</label></br>
    <input type="text" name="text5" placeholder="СК Дива \ СТОМ Алеф" class="impumoo" required>
    </div>
     <div class="p-3">
    <label>Основные продукты и <br>оказываемые услуги</label></br>
    <input type="text" name="text6" placeholder="Перечислите - продажа мыла, конц. товаров" class="impumoo" required>
    </div>
     <div class="p-3">
    <label>Адрес текущего сайта или инстаграма</label></br>
    <input type="text" name="text7" placeholder="Пример - spa.kg" class="impumoo" required>
    </div>
     <div class="p-3">
    <label>Где будем брать контент</label></br>
    <input type="text" name="text8" placeholder="Даст заказчик или список сайтов" class="impumoo" required>
    </div>
     <div class="p-3">
    <label>Структура сайта, <br>какие блоки будут?(перечислить)</label></br>
    <input type="text" name="text9" placeholder="Главная, О нас, Галарея, портфолио" class="impumoo" required>
    </div>
    
    <p class="zog">Контакты клиента</p>
    
     <div class="p-3">
    <label>Контактное лицо</label></br>
    <input type="text" name="text10" placeholder="Кто будет заниматься сайтом?" class="impumoo" required>
    </div>
     <div class="p-3">
    <label>Телефон</label></br>
    <input type="tel" name="tel2" placeholder="Номер телефона" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>E-mail</label></br>
    <input type="email" name="email2" placeholder="E-mail" class="impumoo" required>
    </div>
    
    <p class="zog">Дизайн</p>
    
     <div class="p-3">
    <label>Адреса сайтов, которые нравятся и <br>что именно, перечислите и опишите</label></br>
    <input type="text" name="text11" placeholder="pinterest.com, pinterest.com, pinterest.com" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Описание пожеланий заказчика,<br> что он хочет видеть</label></br>
    <input type="text" name="text12" placeholder="Нужны кнопка, и рыбка" class="impumoo" required>
    </div>
    
    <p class="zog">Функционал</p>
    
    <div class="p-3">
    <label>Функции которые нужны на сайте</label></br>
    <input type="text" name="text13" placeholder="Это будет интернет магазин, все функции" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Сказочные обещания и комментарии</label></br>
    <input type="text" name="text14" placeholder="Нужно сделать оплату онлайн итд" class="impumoo" required>
    </div>
    <div class="p-3">
    <input type="checkbox" name="check" required><br>
    <label>Я реально четко заполнил(а) этот бриф, атвичаю что все что тут я<br> написал является реальным, я отдуши постарался облегчить жизнь<br> дизайнерам и программистам, и я реально отдаю отчет тому что я<br> заполнил и прочитал тут, и в случае если я сделал это беспонтово я<br> осведомлен о наказании и готов его понести какое бы оно не было.</label>
    </div>
    <div class="p-3">
    <input type="submit" class="bttn">
    </div>
</form>
</div>
</body>
</html>