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
<form action="{{ route('task') }}" method="POST" enctype="multipart/form-data">
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
    <label>Дата заполнения задачи</label></br>
    <input type="text" name="text2" placeholder="12.08.2019" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Когда примерно нужно?<br>(завтра,вчера,сейчас не принимаются)</label></br>
    <input type="text" name="text3" placeholder="35 дней \ до 1 сентября" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Название проекта</label></br>
    <input type="text" name="text4" placeholder="Салон красоты Дива" class="impumoo" required>
    </div>

    <p class="zog">Суть задачи</p>
    
    <div class="p-3">
    <label>Опишите подробно что нужно сделать</label></br>
    <input type="text" name="text13" placeholder="Нужно поставить видео на главнй экран" class="impumoo" required>
    </div>
    <div class="p-3">
    <label>Коментарии</label></br>
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