@component('mail::message')
    <html>
    <body>
    <div class="TTBold" style="padding:7%; border:4px #EFBB42 solid;">
        <h3>Информация</h3>
        <strong class="TTLight">Менеджер:</strong> {{ $formData['text1'] }}<br>
        <strong class="TTLight">E-mail:</strong> {{ $formData['email'] }}<br>
        <strong class="TTLight">Телефон:</strong> {{ $formData['tel'] }}<br>
        <strong class="TTLight">Дата заполнения:</strong> {{ $formData['text2'] }}<br>
        <strong class="TTLight">Когда примерно нужно?:</strong> {{ $formData['text3'] }}<br>
        <strong class="TTLight">Название проекта:</strong> {{ $formData['text4'] }}<br>
        <strong class="TTLight">Что нужно сделать:</strong> {{ $formData['text13'] }}<br>
        <strong class="TTLight">Комментарии:</strong> {{ $formData['text14'] }}<br>
    </div>
    </body>
    </html>
@endcomponent
