@component('mail::message')
    <html>
    <body>
    <div class="TTBold" style="padding:7%; border:4px #EFBB42 solid;">
        <h3>Менеджер</h3>
        <strong class="TTLight">Имя:</strong> {{ $formData['text1'] }}<br>
        <strong class="TTLight">E-mail:</strong> {{ $formData['email'] }}<br>
        <strong class="TTLight">Телефон:</strong> {{ $formData['tel'] }}<br>
         <strong class="TTLight">Дата заполнения брифа:</strong> {{ $formData['text2'] }}<br>
          <strong class="TTLight">Срок разработки:</strong> {{ $formData['text3'] }}<br>
           <strong class="TTLight">Название проекта:</strong> {{ $formData['text4'] }}<br>
           
           <br>
           <h3>Информация о клиенте</h3>
            <strong class="TTLight">Название компании:</strong> {{ $formData['text5'] }}<br>
             <strong class="TTLight">Основные продукты и <br>оказываемые услуги</strong> {{ $formData['text6'] }}<br>
              <strong class="TTLight">Адрес текущего сайта или инстаграма:</strong> {{ $formData['text7'] }}<br>
               <strong class="TTLight">Где будем брать контент:</strong> {{ $formData['text8'] }}<br>
<strong class="TTLight">Структура сайта, <br>какие блоки будут?(перечислить):</strong> {{ $formData['text9'] }}<br>
<br>
<h3>Контакты клиента</h3>
<strong class="TTLight">Контактное лицо:</strong> {{ $formData['text10'] }}<br>
<strong class="TTLight">Телефон:</strong> {{ $formData['tel2'] }}<br>
<strong class="TTLight">E-mail:</strong> {{ $formData['email2'] }}<br>
<br>
<h3>Дизайн</h3>
<strong class="TTLight">Адреса сайтов, которые нравятся и <br>что именно, перечислите и опишите:</strong> {{ $formData['text11'] }}<br>
<strong class="TTLight">Описание пожеланий заказчика,<br> что он хочет видеть:</strong> {{ $formData['text12'] }}<br>
<br>
<h3>Функционал</h3>
<strong class="TTLight">Функции которые нужны на сайте:</strong> {{ $formData['text13'] }}<br>
<strong class="TTLight">Сказочные обещания и комментарии:</strong> {{ $formData['text14'] }}<br>
        <br>
    </div>

    </body>
    </html>
@endcomponent
