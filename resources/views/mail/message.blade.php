@component('mail::message')
    <html>
    <body>
    <div class="TTBold" style="padding:7%; border:4px #EFBB42 solid;">
        <h3>Заявка</h3>
        <strong class="TTLight">Имя:</strong> {{ $formData['name'] }}<br>
        <strong class="TTLight">E-mail:</strong> {{ $formData['email'] }}<br>
        <strong class="TTLight">Телефон:</strong> {{ $formData['phone'] }}<br>
        <strong class="TTLight">Описание:</strong> {{ $formData['desc'] }}<br>
        <strong class="TTLight">Что нужно сделать:</strong> {{ $formData['need'] }}<br>
        <strong class="TTLight">Бюджет:</strong> {{ $formData['price'] }}<br>
    </div>
    </body>
    </html>
@endcomponent
