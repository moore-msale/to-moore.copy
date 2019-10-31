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
                    <a href="#" class=a"ics">
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
                <h1 class="sf-black port-main-text" data-aos="flip-down" style="padding-bottom:20%; background-repeat: no-repeat; background-image: url({{ asset('images/moorebg.png') }});color: #fefefe; font-size: 135px; line-height: 161px; text-align: center;background-position: center; letter-spacing: 0.05em; text-transform: uppercase;">{{__('main.abouts')}}
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
    <br>{{ __('main.abb-text') }} </span></span>
<hr style="margin-top: 3%;">
   </div>

   <div class="container">
       <div class="row">
           <div class="col-lg-6 col-12">
               <span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 30px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%;font-family: SF Pro Display Ultralight; color: #191919;"><span class="responsive-h4">
               {{ __('main.abb-text1') }}</span>
               </span>
           </div>
             <div class="col-lg-6 col-12 paddm-4">
<span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 270px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 60%; color: #191919;"><span class="responsive-h4"><span class="lod-q obvod" ">250</span></span></span>
           </div>
       </div>
   </div>




<div class="position-relative" id="container">
<div class="over-bgm"></div>
  <video autoplay muted loop>
    <source src="/images/street.mp4" type="video/mp4">
  </video>
</div>


   <div class="container ab-o">
       <div class="row">
           <div class="col-lg-6 col-12">
               <span class="font-weight-bold sf-ultralight text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 30px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%;font-family: SF Pro Display Ultralight; color: #191919;"><span class="responsive-h4">
               {{ __('main.abb-text2') }}</span>
               </span>
           </div>
             <div class="col-lg-6 col-12">
              <span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 270px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 60%; color: #e2e2e2;"><span class="responsive-h4">4</span></span>
           </div>
       </div>
   </div>


    <div class="container">
<span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 55px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">
   .MOORE - <br></span>
    ЭТО ЛЮДИ И ОПЫТ</span></div>

    <div class="container">
       <div class="row">
           <div class="col-lg-4 col-12">
              <span class="obvod sf-black" style="font-size:200px;"> 4</span> 
              <span class="opis-r" style="color:#212529;transform: matrix(1, 0, 0, 1, 0, 0) translateZ(0px);">года опыта <br>у нашей команды</span>
           </div>
             <div class="col-lg-8 col-12">
               <span class="sf-black" style="font-size:200px;">15</span> <span class="opis-r" style="color:#212529;transform: matrix(1, 0, 0, 1, 0, 0) translateZ(0px);">ФУЛ - ТАЙМ<br>
                            СПЕЦИАЛИСТОВ</span>
           </div>
       </div>
   </div>


    <div class="container">
<span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 55px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">
        .Наша эспертиза </span></span>
   </div>


  <div class="container">
<span class="font-weight-bold sf-bold text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 20px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #969696;    display: block;
    padding-top: 3%;
    padding-bottom: 1%;"><span class="responsive-h4">
        - Разработка сайтов </span></span>
   </div>

     <div class="container">
      <div class="row">
      <div class="col-lg-6 col-12">
<span class="font-weight-bold sf-ultralight text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 17px; text-align: left!important; font-weight: 400; font-style: normal; letter-spacing: 2px; line-height: 22px; color: #202020;    display: block;
    padding-bottom: 1%;"><span class="responsive-h4">
   В разработке сайтов мы используем как готовые платформы: wordpress, opencart, ModX так и фреймворки Laravel, Symfony, Bootstrap. В наших проектах, в административной части мы разработываем легкий в использовании редактор любых страниц - понятный, простой,
для изменения и редактирования, к примеру, новостей компании, любого контента на всех страницах.<br>
<br>
Не зависимо от того, с какого устройства будет заходить пользователь,
Ваш сайт будет корректно отображаться на любых экранах (на ПК, ноутбуках,
смартфонах и т.д.) <br>
<br>
В основе визуала мы стараемся придерживается UX\UI для того что бы пользователь четко понимал что ему нужно делать, что читать и куда идти, и обязательно не забываем про визуальное воспроятие emotion design
    </span></span>
   </div>
<div class="col-lg-6 col-12 eff-mo-q">
<div class="loader">
  <span class="loader__inner"></span>
  <span class="loader__inner"></span>
</div>
 </div>
 </div>
  </div>
  
  
  
  <div class="container">
<span class="font-weight-bold sf-black text-about aos-init aos-animate" data-aos="fade-up" style="font-size: 20px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #969696;    display: block;
    padding-top: 3%;
    padding-bottom: 1%;"><span class="responsive-h4">
    </span></span>
   </div>


 <div class="container">
       <div class="row">
           <div class="col-lg-6 col-12">
          
           </div>
             <div class="col-lg-6 col-12">

           </div>

       </div>
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
@endpush