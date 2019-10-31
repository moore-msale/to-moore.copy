@extends('layouts.app')
@section('content')
        <div class="container-fluid">
            <div class="mobile-trans d-md-none d-block" style="width: 130px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 0;">
            </div>
            <div class="row justify-content-center first-block" style="">
                <div class="col-1 d-md-block d-none" >
                    <div class="pl-5 left-sidebar" style="margin-top: 37vh;">
                        <a href="https://www.behance.net/moore_studio" class="ics" target="_blank">
                        <p class="py-3 text-white opacity-5 soc-mo">
                            <i data-aos="fade-right" class="fab fa-behance fa-2x"></i>
                        </p>
                        </a>
                        <a href="https://www.instagram.com/moore_studio/" class="ics" target="_blank">
                        <p class="py-3 text-white opacity-5 soc-mo">
                            <i data-aos="fade-right" class="fab fa-instagram fa-2x"></i>
                        </p>
                        </a>
                        <a href="#" class="ics">
                        <p class="py-3 text-white opacity-5 soc-mo">
                            <i data-aos="fade-right" class="fab fa-facebook-f fa-2x"></i>
                        </p>
                        </a>
                    </div>
                    <img style="position: absolute; bottom: 10%;" data-aos="fade-right" src="{{ asset('images/wedo.png') }}" alt="">
                </div>
                <div class="col-2"></div>
                <div class="col-md-6 col-12 text-center pt-md-0 pt-5">
                    <div class="h-100 main-trans d-lg-block d-none" style="width: 260px; position: absolute; background-image: linear-gradient(-90deg, #30105e8a, #0000007a); box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 10;">
                    </div>


                <p class="sf-light pl-lg-0 pl-md-0 pl-5 pr-lg-0 pr-md-0 pr-5 team-text in" data-aos="fade-up" style="color: #fefefea6; padding-top: 35%; font-size: 20px; line-height: 130%; align-items: center; text-align: center; letter-spacing: 0.05em;">

                    {{ __('main.team') }}
                </p>
                <h1 class="sf-black main-text glitch" data-aos="flip-down" style="background-image: url({{ asset('images/moorebg.png') }}); background-repeat:no-repeat; color: #fefefe; font-size: 145px; line-height: 161px; text-align: center; letter-spacing: 0.00em; text-transform: uppercase;" data-text=".MOORE.">
                    .MOORE.
                </h1>
                    <img class="mx-auto w-75 d-md-block d-none studios" data-aos="flip-up" style="z-index: 0; padding-bottom:40%;" src="{{ asset('images/STUDIO.png') }}" alt="">
                     <div class="d-lg-block d-none" style="position:absolute; top: 59%; left: 39%;  width: 137px; z-index: 998;    cursor: pointer;">
                    <div class="oli">
  <div class="ears"></div>
</div>
<div class="shadow1">
  <div class="itemz"></div>
  <div class="itemz"></div>
  <div class="itemz"></div>
  <div class="itemz"></div>
  <div class="itemz"></div>
</div>
<path d="m 335.94313,30.576451 c -9.79312,-0.146115 -17.39091,4.439466 -17.39091,13.789758 0,11.508038 -2.91019,60.415461 1.40532,76.238951 4.31553,15.82355 21.58583,38.97215 34.51834,54.67597 10.06946,12.22726 4.34772,41.69626 4.34772,56.0813 0,14.38499 -2.89751,25.9107 -8.65153,25.9107 -5.75402,0 -14.35971,5.75217 -20.11373,11.50612 -5.75395,5.75402 -11.51588,12.95631 -18.70841,7.20229 -7.19251,-5.75402 -20.15388,-11.49441 -43.16987,-15.80992 -23.01609,-4.31551 -61.84129,-0.0234 -86.29583,8.60763 -24.45458,8.63104 -76.25857,56.11061 -90.643535,77.6882 -14.385056,21.5775 -15.799189,87.73247 -14.36068,97.80193 1.438509,10.06953 -2.908267,17.28255 -10.100778,8.65153 -7.192459,-8.63104 -12.911438,-4.30381 -12.911438,-4.30381 0,0 -7.202292,14.37045 -7.202292,21.56298 0,7.19244 2.854564,14.36068 2.854564,14.36068 0,0 -11.506099,8.65056 -11.506099,14.40458 0,5.75397 11.515881,15.83044 18.708391,24.46146 7.192546,8.63097 31.651182,25.89997 41.720624,24.46148 10.069543,-1.43851 28.775063,-0.0121 35.967573,4.3038 7.19253,4.31551 24.44687,10.06761 46.02443,11.5061 21.57752,1.43851 81.97845,5.75307 97.80193,5.75307 15.82357,0 20.1675,-2.86435 27.35996,-10.05688 7.19253,-7.19245 -5.78527,-15.84115 -10.10079,-25.9107 -4.31551,-10.06946 14.40363,-7.16912 20.15765,-8.60763 5.75402,-1.43849 21.59424,-11.5061 31.66376,-11.5061 10.06953,0 8.6165,10.05589 21.56298,15.80993 12.94654,5.75393 31.63939,24.43902 46.02443,27.31602 14.38497,2.87695 47.47173,0.0121 58.97979,-4.30381 11.50797,-4.31551 10.06946,-14.37044 0,-21.56297 -10.06955,-7.19244 -34.50663,-20.16742 -38.82214,-27.35994 -4.31551,-7.19246 -5.74329,-15.81969 1.44924,-23.01224 7.19251,-7.19252 14.35876,-4.30292 25.86678,-10.05685 11.50806,-5.75402 15.80992,-23.04354 15.80992,-33.11301 0,-10.06953 1.36928,-21.01352 5.75307,-27.31602 3.67345,-5.28128 5.10015,-22.13212 5.30499,-33.64009 0.21874,-12.28864 -5.29329,-15.24871 -9.60881,-22.44122 -4.31543,-7.19246 4.30285,-17.25917 10.05687,-17.25917 5.75402,0 31.65108,-4.33602 41.72062,-8.65153 10.06946,-4.31546 20.16744,-23.03273 27.35995,-31.66377 7.19246,-8.63095 1.41799,-27.31512 -8.65154,-33.06907 -10.06954,-5.75402 -10.07746,-21.59431 -18.70841,-31.66377 -8.63103,-10.06953 -18.68507,-31.62961 -27.31604,-38.82213 -8.63101,-7.19253 -28.77502,-12.95535 -35.96755,-12.95535 -7.19253,0 -11.50612,9e-4 -11.50612,-5.75306 0,-5.75402 -1.44924,-12.9203 -1.44924,-25.86678 0,-12.94655 -16.24344,-68.464566 -37.3729,-102.149659 -4.40799,-7.027282 -11.5581,-5.405316 -20.15765,-2.898485 -5.69412,1.659863 -8.60761,4.35564 -8.60761,23.056136 0,18.700566 -11.50515,-0.03133 -17.25917,-10.100794 -5.75403,-10.069512 -15.86265,-21.58444 -28.80918,-24.461458 -2.42749,-0.539415 -4.76669,-0.800692 -7.02665,-0.834399 z" id="rabbit"></path></svg></a>
</div>
                    {{--<div class="d-lg-none d-block" style="position:absolute; top: 59%; left: 31%;  width: 137px; z-index: 998;    cursor: pointer;">--}}
                        {{--<div class="oli">--}}
                            {{--<div class="ears"></div>--}}
                        {{--</div>--}}

                    {{--</div>--}}


                    <div class="text-center btn-effect d-md-none d-block mx-auto" data-aos="fade-up" style="line-height: 0; padding:1.5%; width: 176px; z-index: 998;    border-radius: 100px;    border: 1px solid white;">
                        {{--<div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 176px;"></div>--}}
                        <br>
                        <a href="#" class="moore-bt text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">
                            {{ __('main.btn.more') }}
                        </a>
                        <br>
                        {{--<div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 128px;"></div>--}}

                    </div>
                    <img class="d-md-block d-none vrashe" style="position: absolute; bottom:6%; left:38%;" src="{{ asset('images/Line.png') }}" alt="">
                </div>
                <div class="col-3 d-md-block d-none">
                    <div class="pr-4 right-sidebar " data-aos="fade-up" style="position: absolute; top:50vh; right:-32px; transform: rotate(90deg); line-height: 2;">
                        <div class="vector-border" style="border-top: 1px solid #FFFFFF; width: 220px;"></div>
                        <span class="py-4 text-white sf-light vector-text" style="width:240px;font-size: 16px; letter-spacing: 0.2em;">
                             {{ __('main.scroll') }}
                        </span>
                    </div>
                    <a href="/portfolio_queue">
                    <div class="text-center portfolio"  data-aos="fade-up" style="position: absolute; bottom: 4%; line-height: 0; letter-spacing: 0.2em; z-index: 998;">
                        <p class="sf-ligh text-white pb-3"  style="font-size: 14px;">
                            {{ __('main.show') }}
                        </p>
                        <img  src="{{ asset('images/portfolio.png') }}" alt="">
                        <p class="sf-ligh text-white pt-4" style="font-size: 14px;  line-height: 0; letter-spacing: 0.2em;">
                            {{ __('main.project') }}
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-12 d-md-none d-block pb-3 pt-5 text-center portfolio" data-aos="fade-up">
                    <img src="{{ asset('images/portfolio.png') }}" alt="">
                </div>
            </div>
        </div>
    <div class="container-fluid p-5">

        <span class="font-weight-bold sf-black text-about" data-aos="fade-up" style="font-size: 73px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">{{ __('main.we-re1') }} <span class="obvod">{{ __('main.we-re2') }}</span>
                <br>{{ __('main.we-re3') }}<br>
<span class="obvod">{{ __('main.we-re4') }}</span>{{ __('main.we-re5') }} <br>{{ __('main.we-re6') }}<br> {{ __('main.we-re7') }}<span class="obvod">{{ __('main.we-re8') }}</span>.</span></span>

        <div class="row" style="padding-top:5%; padding-left:1%;">
            <div class="col-md-5 col-12 p-5" data-aos="fade-up" style="height: 473px; border: 5px #000000 solid;    padding: 2rem!important;">
                <img class="" data-aos="fade-up" src="{{ asset('images/dots.png') }}" alt="">
                <img class="plus" data-aos="fade-up" style="position: absolute; top:5%; right: 5%;" src="{{ asset('images/+.png') }}" alt="">
                <p class="font-weight-light sf-light text-foter " data-aos="fade-up" style="position: absolute; bottom:5%; font-size: 50px; line-height: 100%; text-transform: lowercase;">
                    {{ __('main.types1') }} <br>
                    {{ __('main.types2') }} <br>
                    {{ __('main.types3') }} <br>
                    {{ __('main.types4') }} <br>
                </p>
            </div>
            <div class="col-md-7 col-12" style="padding-left:5%;">
                <div class="container-fluid">
                    <div class="row">
            <div class="col-lg-4 col-md-6 col-12" style="margin-top: 7%;">
                <p class="font-weight-bold sf-black" data-aos="fade-up" style="font-size: 16px; line-height: 21px; letter-spacing: 0.1em; text-transform: uppercase;">
                    {{ __('main.create') }}
                </p>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 170%; letter-spacing: 0.1em;">
                    {{ __('main.create1') }}<br>
                    {{ __('main.create2') }}<br>
                    {{ __('main.create3') }}<br>
                    {{ __('main.create4') }}<br>
                    {{ __('main.create5') }}<br>
                    {{ __('main.create6') }} <br>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-12" style="margin-top: 7%;">
                <p class="font-weight-bold sf-black" data-aos="fade-up" style="font-size: 16px; line-height: 21px; letter-spacing: 0.1em; text-transform: uppercase;">
                    {{ __('main.knows') }}
                </p>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 170%; letter-spacing: 0.1em;">
                    Google ADS <br>
                    SMM <br>
                    Yandex Direct <br>
                    SEO <br>
                    Target ADS <br>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-12" style="margin-top: 7%;">
                <p class="font-weight-bold sf-black" data-aos="fade-up" style="font-size: 16px; line-height: 21px; letter-spacing: 0.1em; text-transform: uppercase;">
                    {{ __('main.we-do') }}
                </p>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 170%; letter-spacing: 0.1em;">
                    {{ __('main.wedo') }}<br>
                    {{ __('main.wedo1') }}<br>
                    {{ __('main.wedo2') }}<br>
                    {{ __('main.wedo3') }}<br>
                    {{ __('main.wedo4') }}<br>
                </p>
            </div>
                        <div class="col-md-11 col-12 d-md-block d-none">
                            <img class="w-100" data-aos="fade-up" src="{{ asset('images/liner.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12" style="line-height: 0; padding-top:11%; ">
                        <p class="font-weight-bold sf-light" data-aos="fade-up" style="font-size: 16px; letter-spacing: 0.05em;    line-height: 22px; margin: 0;">
                            {{ __('main.we-do2') }} <br>
                            {{ __('main.we-do3') }}
                            
                        </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <p class="font-weight-light sf-ultralight" data-aos="fade-up" style="font-size: 100px; line-height: 1;">
                                250
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 text-md-center">
                            <p class="font-weight-bold sf-light media-year" data-aos="fade-up" style="position: absolute; top:21%; left: 13%; transform: rotate(-90deg); font-size: 14px; line-height: 140%; letter-spacing: 0.05em; text-align: right;">
                                {!! __('main.digital') !!}
                            </p>
                            <p class="font-weight-bold sf-black pl-lg-0 pl-md-4 pl-0" data-aos="fade-up" style="font-size: 100px; line-height: 1;    color: #7f28ff;">
                                5
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <p class="font-weight-normal mb-0 sf-ultralight" data-aos="fade-up" style="font-size: 100px; line-height: 1;">
                                100
                            </p>
                            <p class="sf-light" data-aos="fade-up" style="font-size: 16px; line-height: 120%; letter-spacing: 0.05em;">
                                {{ __('main.visit') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid port" style="background-image: url({{ asset('images/bgport.png') }}); background-size: 100% 100%; height:750px;">
        <div class="d-lg-block d-none main-trans sec"  style="height:750px;width: 260px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:25%; z-index: 1;">
        </div>
        <div class="row" style="padding-top: 3%;">

            <div class="col-md-6 col-12 nova-bg py-md-0 py-5">
                <img class="w-100" data-aos="fade-right" style="max-width: 520px!important;" src="{{ asset('images/ws20.png') }}" alt="">
                <a href="#">
                <div class="d-md-block d-none vector-effect" data-aos="fade-right" style="position: absolute; left:6%;bottom:-5%; border-bottom: 0px #fefefe solid; width:180px;    cursor: pointer;">
                     <a class="button1"><svg><g><line x2="227.62" y1="31.28" y2="31.28"></line>
  <polyline points="222.62 25.78 228.12 31.28 222.62 36.78"></polyline>
  <circle cx="224.67" cy="30.94" r="30.5" transform="rotate(180 224.67 30.94) scale(1, -1) translate(0, -61)"></circle></g></svg><font>{{ __('main.watch.case') }}</font></a>
<!--                     <span class="hrs sf-light item-min-a" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;text-transform: lowercase;">{{ __('main.watch.case') }}<div class="pulseDot"></div></span>
 -->
                </div>
                </a>
                <div class="d-md-none d-block vector-effect" data-aos="fade-right" style="border-bottom: 0px #fefefe solid; width: 190px;">
                    <span class="sf-light item-min-a" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;    cursor: pointer;">{{ __('main.watch.case') }}</span>
                    <img class="ml-3 vector-image" src="{{ asset('images/Arrow.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-12 pt-md-0 py-4 enesay-bg">
                <div class="w-100 mb-4 d-md-block d-none tx-mo" data-aos="fade-up" alt="">PREMIO</div>
                <div class="vector-effect d-md-block d-none"  data-aos="fade-up" style="border-bottom: 0px #fefefe solid; width:180px;    cursor: pointer;">
                    <a class="button1"><svg><g><line x2="227.62" y1="31.28" y2="31.28"></line>
  <polyline points="222.62 25.78 228.12 31.28 222.62 36.78"></polyline>
  <circle cx="224.67" cy="30.94" r="30.5" transform="rotate(180 224.67 30.94) scale(1, -1) translate(0, -61)"></circle></g></svg><font>{{ __('main.watch.case') }}</font></a>
 <!--               <span class="hrs sf-light item-min-a" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;text-transform: lowercase;">{{ __('main.watch.case') }}<div class="pulseDot"></div></span> -->
                </div> 

                <div class="d-lg-block d-none" style="position: absolute; bottom: 10%; left:2%;padding: 3%;
    border: 1px solid #afaaaf;
    background: repeating-linear-gradient(45deg, #000000, #1c023f00 100px);
    box-shadow: 0 0 50px 0px #00000085;">
                    <p class="sf-light" data-aos="fade-up" style="font-size: 18px; line-height: 140%; letter-spacing: 0.06em; color:white;font-family: SF PRO DISPLAY light;">
                           Мы создаем стильные и эффектные решения,<br> продумываем мощный концепт и делаем<br> нестандартные проекты, которые будут<br> разделять ценности компании  и помогать  в<br> реализации бизнес-задач<br>
                    </p>
                </div>
                <div class="d-lg-none d-block pb-md-0 pb-2 pt-md-0 pt-3">
                    <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 140%; letter-spacing: 0.05em; color:white;">
                        Давно выяснено, что при оценке дизайна 
                        и композиции читаемый текст мешает сосредоточиться.
                        Lorem Ipsum используют потому, что тот обеспечивает
                        более или менее стандартное заполнение шаблона,  
                        а также реальное распределение букв и пробелов 
                        в абзацах, которое не получается при простой 
                        дубликации "Здесь ваш текст..Здесь ваш текст. 
                    </p>
                </div>
                   <div class="w-100 mb-4 d-md-none d-block tx-mos" data-aos="fade-up">PREMIO</div>
                <div class="vector-effect d-md-none d-block mb-5 "  data-aos="fade-up" style="border-bottom: 0px #fefefe solid; width:180px;    cursor: pointer;">
                    
                    <span class="sf-light item-min-a" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;">{{ __('main.watch.case') }}</span>
                    <img class="ml-3 vector-image" src="{{ asset('images/Arrow.png') }}" alt="">
                
                </div>
                
                <div class="text-center d-md-block d-none btn-effect" data-aos="fade-up" style="position: absolute; line-height: 0; bottom:-5%; left: 2%; z-index: 998;">
                    <a href="https://to-moore.com/portfolio/" style="text-decoration: none;cursor: pointer;">
<button class="explore sf-light">{{ __('main.watch.portfolio') }}<span class="icon-right"></span><span class="icon-right after"></span></button>
                    <br></a>

                    <br>
                    

                </div>
                <div class="moore-bt text-center d-md-none d-block btn-effect" data-aos="fade-up" style=" line-height: 0; bottom:-5%; left: 2%; width: 224px; z-index: 998;    border: 1px solid white; border-radius: 100px;padding: 1.5%;">
                    <br>
                    <a href="/portfolio_queue" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em;cursor: pointer;">1
                        {{ __('main.watch.portfolio') }}
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid pt-lg-0 pt-5" style="background-color: white;">
            <img style="position: absolute; right: 4%; margin-top: 30%; width:10%;" src="{{ asset('images/Line3.png') }}" alt="" class="vrashe">
    <div class="container" style="padding: 0% 6%;">
        <div class="row">
            <div class="col-md-6 px-0 col-12 pt-5" style="padding-top: 20%; padding-bottom: 3%;">
                <h2 class="sf-bold" data-aos="fade-right" style="font-size: 28px; line-height: 140%; letter-spacing: 0.05em; text-transform: uppercase;">
                    {{ __('main.clients') }}
                </h2>
            </div>
            <div class="col-md-6 px-0 col-12" style="padding-top: 0%; padding-bottom: 3%;">
               
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/beeline.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/stom.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/apiks.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/artclinic.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/asia.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/avia.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/chef.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/cityestetic.png') }}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/chef.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/cityestetic.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/denttrade.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/digai.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/elithouse.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/greenclinic.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/marina.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/logic.png') }}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/medi.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/mistorelogo.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/novalogo.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/omurzakov.png') }}" alt="">
            </div>

            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/pamir.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/sa.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/spa.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/vino.png') }}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/LB.png') }}" alt="">
            </div>
            <div class="client-collumn px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/akmaral.png') }}" alt="">
            </div>
        </div>

        </div>
    </div>

    <div class="container" style="padding-top:10%;">
        <div class="row">
            <div class="col-lg  -6 col-12">
                <img class="pb-2 pr-2" data-aos="fade-right" src="{{ asset('images/text-line.png') }}" alt=""><span class="sf-medium" style="font-size: 20px;line-height: 100%;letter-spacing: 0.05em;text-transform: uppercase;">
                    {{ __('main.experience') }}
                </span>
                <h2 class="sf-black font-weight-bold text-about" data-aos="fade-rigth" style="font-size: 55px; line-height: 100%; letter-spacing: 0.05em;">
                    {{ __('main.experience-slog') }}
                    <br> {{ __('main.experience-slog2') }}
                </h2>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-lg-4 col-12 text-center d-md-block d-none">
                <img src="{{ asset('images/Line3.png') }}" data-aos="fade-right" alt="" class="vrashe">
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="sf-black" data-aos="fade-up" style="font-size: 30px; line-height: 42px; letter-spacing: 0.1em; text-transform: uppercase;">
                    <i class="fab fa-dev"></i> {{ __('main.we-help') }}
                </h2>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 140%; letter-spacing: 0.1em; color: black;">
                    {{ __('main.we-help-text') }}
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="sf-black" data-aos="fade-up" style="font-size: 30px; line-height: 42px; letter-spacing: 0.1em; text-transform: uppercase;">
                    <i class="fab fa-connectdevelop"></i> {{ __('main.we-develop') }}
                </h2>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 140%; letter-spacing: 0.1em; color: black;">
                    {{ __('main.we-develop-text') }}
                </p>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top:10%; padding-bottom: 10%;">
<div class="row">
    <div class="col-12">
    <h2 class="font-weight-bold text-about sf-bold" data-aos="fade-right" style="font-size: 30px;line-height: 140%;letter-spacing: 0.05em;text-transform: uppercase;">
        {!! __('main.technology') !!}
    </h2>
    </div>
</div>
        <div class="row pt-md-0 pt-5 tech" style="padding-left:15%;">
        <div class="col-md-2 col-6 d-md-block d-none"></div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
            <img src="{{ asset('images/html.png') }}" alt="">
            </div>
            <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                HTML, CSS3, JS
            </p>
        </div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
            <img src="{{ asset('images/laravel.png') }}" alt="">
            </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                LARAVEL
            </p>
        </div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
                <img src="{{ asset('images/bootstrap.png') }}" alt="">
            </div>
            <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                BOOTSTRAP
            </p>
        </div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
                <img src="{{ asset('images/php.png') }}" alt="">
            </div>
            <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                PHP
            </p>
        </div>
            <div class="col-md-2 col-6 text-center py-4"  data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/github.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    GITHUB
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 d-md-block d-none">

            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/slack.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    SLACK
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/skype.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    SKYPE
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/figma.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    FIGMA
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/adobe.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    ADOBE XD
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/nodejs.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    NODE JS
                </p>
            </div>
        </div>

    </div>



@endsection
