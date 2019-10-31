@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="port-trans d-lg-none d-block h-100" style="width: 130px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 0;">
        </div>
        <div class="row justify-content-center port-first">
            <div class="col-1 d-md-block d-none" >
                <div class="pl-5 left-sidebar" style="margin-top: 37vh;">
                    <a href="#" class="ics">
                        <p class="py-3 text-white opacity-5">
                            <i data-aos="fade-right" class="fab fa-behance fa-2x"></i>
                        </p>
                    </a>
                    <a href="#" class="ics">
                        <p class="py-3 text-white opacity-5">
                            <i data-aos="fade-right" class="fab fa-instagram fa-2x"></i>
                        </p>
                    </a>
                    <a href="#" class="ics">
                        <p class="py-3 text-white opacity-5">
                            <i data-aos="fade-right" class="fab fa-facebook-f fa-2x"></i>
                        </p>
                    </a>
                </div>
                <img style="position: absolute; bottom: 10%;" data-aos="fade-right" src="{{ asset('images/wedo.png') }}" alt="">
            </div>

            <div class="col-md-10 col-12 text-center pt-md-0 pt-5">
                <div class="h-100 main-trans d-lg-block d-none" style="width: 260px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 10;">
                </div>


                <p class="sf-light pl-lg-0 pl-md-0 pl-5 pr-lg-0 pr-md-0 pr-5 team-text in" data-aos="fade-up" style="color: #fefefe; padding-top: 20%; font-size: 15px; line-height: 130%; align-items: center; text-align: center; letter-spacing: 0.05em;">
                    {{ __('main.team') }}
                </p>
                <h1 class="sf-black port-main-text li-h-m" data-aos="flip-down" style="padding-bottom:20%; background-repeat: no-repeat; background-image: url({{ asset('images/moorebg.png') }});color: #fefefe; font-size: 135px; line-height: 161px; text-align: center;background-position: center; letter-spacing: 0.05em; text-transform: uppercase;">Contact US
                </h1>

                {{--<div class="text-center btn-effect d-md-block d-none" data-aos="fade-up" style="position:absolute; top: 60%; left: 40%; line-height: 0; padding-top:5%; width: 176px; z-index: 999;">--}}
                {{--<div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 176px;"></div>--}}
                {{--<br>--}}
                {{--<a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">--}}
                {{--Узнать больше--}}
                {{--</a>--}}
                {{--<br>--}}
                {{--<div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 128px;"></div>--}}
                {{--</div>--}}
                {{--<div class="text-center btn-effect d-md-none d-block mx-auto" data-aos="fade-up" style="line-height: 0; padding-top:5%;  z-index: 9999; width: 176px;">--}}
                {{--<div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 176px;"></div>--}}
                {{--<br>--}}
                {{--<a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">--}}
                {{--Узнать больше--}}
                {{--</a>--}}
                {{--<br>--}}
                {{--<div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 128px;"></div>--}}

                {{--</div>--}}

            </div>
            <div class="col-1 d-md-block d-none">
                <div class="pr-4 right-sidebar vector-effect" data-aos="fade-up" style="position: absolute; top:50vh; right:-32px; transform: rotate(90deg); line-height: 2;">
                    <div class="vector-border" style="border-top: 1px solid #FFFFFF; width: 220px;"></div>
                    <span class="py-4 text-white sf-light vector-text" style="width:240px;font-size: 16px; letter-spacing: 0.2em;">
                            {{ __('main.scroll') }}
                        </span>
                </div>

            </div>
        </div>
    </div>


   <div class="container ab-o">
<span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 55px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">
   <span class="obvod" style="font-size:60px;">MOORE STUDIO - <br>WE DO MORE THAN OTHERS</span> <br>
    <br>
Мы открыты к новым проектам и любим делать что-то сложное и дико красивое, если у вас есть идея, но вы не знаете как ее воплотить в жизнь, мы рады будем это сделать вместе с вами </span></span>
<hr style="margin-top: 3%;">
   </div>

   <div class="container">
       <div class="row">
           <div class="col-lg-6 col-12">
              <div class="p-5mo">
<form class="row" action="{{ route('mail') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="col-12"><p class="zog-m sf-black">Оставьте заявку</p></div>
     <div class="col-6 bag-form">
         <div class="p-3-m">
    <label class="sf-black">Ваше имя</label><br>
    <input type="text" name="text1" id="name" placeholder="Представьтесь пж-та" class="impumoo2 for-flu" required>
    </div>
        <div class="p-3-m">
    <label class="sf-black">Телефон</label><br>
    <input type="tel" name="tel" id="phone" placeholder="Оставьте ваш телефон" class="impumoo2 for-flu" required>
    </div>
    <div class="p-3-m">
    <label class="sf-black">E-mail</label><br>
    <input type="email" name="email" id="email" placeholder="E-mail" class="impumoo2 for-flu" required>
    </div>
     </div>
    
    <div class="col-6 bag-form2">
         <div class="p-3-m">
    <label class="sf-black">Описание проекта</label><br>
    <input type="text" name="text4" id="desc" placeholder="Салон красоты Дива" class="impumoo2 for-flu" required>
    </div>
     <div class="p-3-m">
    <label class="sf-black">Что нужно сделать</label><br>
    <input type="text" name="text13" id="need" placeholder="Опишите пж-та" class="impumoo2 for-flu" required>
    </div>
    <div class="p-3-m">
    <label class="sf-black">Бюджет</label><br>
    <input type="text" name="text14" id="price" placeholder="Например - 1750$" class="impumoo2 for-flu" required>
    </div>
        </div>

    <div class="p-3-m">
<button type="submit" class="bt-f-h message-send">Отправить</button>
    </div>
</form>
</div>
           </div>
           
           
           
           
           
             <div class="col-lg-6 col-12 paddm-4">
                 <p class="zog-m sf-black">
                     <span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 55px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">
   <span class="obvod" style="font-size:40px;">Связаться с нами
   </span>
                         </span></span></p>
   
   <div class="container-fluid">
       <div class="row">
           <div class="col-6">
               <span class="con-ta">/ / / Главный офис</span><br>
<span class="con-ta">Бульвар Эркиндик 64Б</span> <br>
<span class="con-ta">ololohouse erkindik</span><br>
<span class="con-ta sf-black">+996 709 111 143</span><br>
<span class="con-ta sf-black">+996 771 044 429</span><br>
<span class="con-ta">info@to-moore.com</span><br>
<br>
<span class="con-ta">Вопросы и предложения<br></span>
<span class="con-ta sf-black">da@to-moore.com</span>
               </div>
   <div class="col-6">
       <div style="background: #d8d8d8;
    padding: 4%;">
               <span class="con-ta">/ / / Москва</span><br>
<span class="con-ta">ул.Боровая д.7 с.10 м.Электрозаводская</span> <br>
<span class="con-ta sf-black">go@to-moore.com</span><br>
</div>
<br>
<div style="background: #d8d8d8;
    padding: 4%;">
<span class="con-ta">/ / / Алматы<br></span>
<span class="con-ta">Мкр. Аксай 1А, 30 А</span> <br>
<span class="con-ta">+77718290051</span> <br>
<span class="con-ta sf-black">kz@to-moore.com</span>
</div>
       </div>
           </div>
       </div>



           </div>
       </div>
   </div>




<div class="position-relative" id="container">
<div class="over-bgm"></div>
  <video style="width:100%;" autoplay muted loop>
    <source src="/images/Face - 678.mp4" type="video/mp4">
  </video>
</div>





@endsection
@push('scripts') 
<script src="https://raw.githubusercontent.com/rishabhp/bideo.js/master/bideo.js"></script>
<script>
var video = document.querySelector('video')
  , container = document.querySelector('#container');
 
var setVideoDimensions = function () {
  // Video's intrinsic dimensions
  var w = video.videoWidth
    , h = video.videoHeight;
   
  // Intrinsic Ratio
  // Will be more than 1 if W > H and less if W < H
  var videoRatio = (w / h).toFixed(2);
   
  // Get the container's computed styles
  //
  // Also calculate the min dimensions required (this will be
  // the container dimentions)
  var containerStyles = window.getComputedStyle(container)
    , minW = parseInt( containerStyles.getPropertyValue('width') )
    , minH = parseInt( containerStyles.getPropertyValue('height') );
   
  // What's the min:intrinsic dimensions
  //
  // The idea is to get which of the container dimension
  // has a higher value when compared with the equivalents
  // of the video. Imagine a 1200x700 container and
  // 1000x500 video. Then in order to find the right balance
  // and do minimum scaling, we have to find the dimension
  // with higher ratio.
  //
  // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
  // scale 500 to 700 and then calculate what should be the
  // right width. If we scale 1000 to 1200 then the height
  // will become 600 proportionately.
  var widthRatio = minW / w
    , heightRatio = minH / h;
   
  // Whichever ratio is more, the scaling
  // has to be done over that dimension
  if (widthRatio > heightRatio) {
    var newWidth = minW;
    var newHeight = Math.ceil( newWidth / videoRatio );
  }
  else {
    var newHeight = minH;
    var newWidth = Math.ceil( newHeight * videoRatio );
  }
   
  video.style.width = newWidth + 'px';
  video.style.height = newHeight + 'px';
};
 
video.addEventListener('loadedmetadata', setVideoDimensions, false);
window.addEventListener('resize', setVideoDimensions, false);
</script>
<script>
    $('.message-send').click(e => {
        e.preventDefault();
        let btn = $(e.currentTarget);
        let name = $('#name');
        let phone = $('#phone');
        let email = $('#email');
        let desc = $('#desc');
        let need = $('#need');
        let price = $('#price');
        $.ajax({
            url: 'message',
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                'name': name.val(),
                'phone': phone.val(),
                'email': email.val(),
                'desc': desc.val(),
                'need': need.val(),
                'price': price.val()
            },
            success: data => {
                swal("Заявка отправлена!","Мы ответим вам в ближайшее время.","success");
                $('#name').val('');
                $('#phone').val('');
                $('#email').val('');
                $('#desc').val('');
                $('#need').val('');
                $('#price').val('');
                console.log(data);
            },
            error: () => {
                console.log(0);
                swal("Что то пошло не так!","Приносим свои извинения","error");
            },
        })


    })
</script>
@endpush