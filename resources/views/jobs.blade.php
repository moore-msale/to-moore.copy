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
                <h1 class="sf-black port-main-text" data-aos="flip-down" style="padding-bottom:20%; background-repeat: no-repeat; background-image: url({{ asset('images/moorebg.png') }});color: #fefefe; font-size: 135px; line-height: 161px; text-align: center;background-position: center; letter-spacing: 0.05em; text-transform: uppercase;">
                    {{ __('main.vacancy') }}
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


    <div class="container">
        <div class="row p-5 d-md-block d-none">
            <span class="font-weight-bold sf-black text-about" data-aos="fade-up" style="font-size: 64px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">{{ __('main.about1') }}<br>
                    {{ __('main.about2') }}<br>
                    {{ __('main.about3') }}<br>
                    {{ __('main.about4') }}<br>
                    {{ __('main.about5') }}<br>
                    {{ __('main.about6') }} </span></span>
        </div>

        <div class="row px-4 py-5 d-md-none d-block">
            <span class="font-weight-bold sf-black text-about" data-aos="fade-up" style="font-size: 64px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">Наша студия находится в
                    постоянном поиске лучших
                    специалистов, знающих свое
                    дело лучше нас и умеющих
                    добиваться качественного
                    результата. </span></span>
        </div>



<div class="container pad-mo-4 bag-mo-j">
	<div class="row">
		<div class="col-lg-6 col-12 pl-md-5 px-md-5 color-mo">
		                <h2 class="sf-black" data-aos="fade-up" style="font-size: 40px; line-height: 100%;">
                    {{ __('main.rule') }}
                </h2>
                                    <p class="sf-light text-description" data-aos="fade-up" style="font-size: 20px; line-height: 120%;">
                        {{ __('main.rule-text') }}
                    </p>
		</div>
				<div class="col-lg-6 col-12 color-mo">
                <h2 class="sf-black" data-aos="fade-up" style="font-size: 40px; line-height: 100%;">
                    {{ __('main.real') }}
                </h2>
                                    <p class="sf-light text-description" data-aos="fade-up" style="font-size: 20px; line-height: 120%;">
                        {{ __('main.real-text') }}

                    </p>

		</div>
	</div>
</div>




        <div class="row px-md-5 py-md-5 py-2 px-2">
            <div class="col-md-12 col-12">
                <h2 class="sf-black" data-aos="fade-up" style="font-size: 64px; line-height: 100%;"><span class="responsive-h4"><span class="obvod">
                    {{ __('main.cool') }}</span></span>
                </h2>

                <div>
                     <span class="font-weight-bold sf-black text-about" data-aos="fade-up" style="font-size: 64px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">
                        {{ __('main.cool-text') }}</span></span>
                    </p>
                </div>
            </div>
        </div>
<hr style="width:93%;">
        <div class="px-md-5 px-0">
            <p class="sf-black text-description" data-aos="fade-up" style="font-size: 20px; line-height: 120%; letter-spacing: 0.1em;">
                {{ __('main.open') }}
                <br>
                {{ __('main.open1') }} JavaScript, JQuery, CSS, HTML, Worpdress
                <br>
                {{ __('main.open2') }}
            </p>
        </div>



    <img class="px-5" data-aos="fade-up" src="{{ asset('images/text-line.png') }}" alt="">

    <div class="row px-md-5 py-md-5 py-4 px-2">
        <div class="col-md-8 col-12">
            <h2 class="sf-black text-h2" data-aos="fade-up" style="font-size: 50px; line-height: 100%;">
                {{ __('main.join') }}
            </h2>

            <div>
                <p class="sf-light text-description" data-aos="fade-up" style="font-size: 20px; line-height: 120%;">
                    {{ __('main.join-text') }}<br>
                    <br>
                    <span class="sf-black" style="">{{ __('main.join-email') }}: da@to-moore.com</span>
                </p>
            </div>
        </div>
        
     
        
        
    </div>
    </div>


@endsection
