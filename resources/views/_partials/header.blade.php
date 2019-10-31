<nav class="navbar menuse navbar-expand-xl py-5 w-100 pr-0 lg-menu" style="z-index: 999; background: transparent; position: fixed;">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-lg-3 col-4 px-5">
                <a href="/" style="">
                    <h2 class="text-white logo sf-black pt-0 d-lg-block d-none" style="font-size: 25px; line-height: 105%; letter-spacing: 0.05em; text-transform: uppercase;">
                        .MOORE
                    </h2>
                    <h2 class="text-white logo sf-black pt-3 d-lg-none d-block" style="font-size: 35px; line-height: 30px; letter-spacing: 0.05em; text-transform: uppercase;">
                        .MOORE
                    </h2>

                </a>
            </div>
            <div class="col-auto my-auto ml-auto d-xl-none px-0">
                <button class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <img class="w-100" src="{{ asset('images/humburger.png') }}" alt="">
                </button>
            </div>
            <div class="col-lg-6 col-8 collapse navbar-collapse"  id="navbarSupportedContent">
                <nav class="mx-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item px-3 lin-mo">
                            <a href="/" class="item-a text-white text-fut-bold sf-light" style="text-decoration: none;">{{ __('main.main') }}
                            <div class="d-flex w-100 align-items-center line-b-mo"><span class="line-b-moo"></span></div>
                            </a>
                        </li>
                         <li class="nav-item px-3 lin-mo">
                            <a href="/about" class="item-a text-white text-fut-bold sf-light" style="text-decoration: none;">{{__('main.abouts')}}
                            <div class="d-flex w-100 align-items-center line-b-mo"><span class="line-b-moo"></span></div>
                            </a>
                        </li>
                        <li class="nav-item px-3 lin-mo">
                            <a href="/portfolio_queue" class="item-a text-white text-fut-bold sf-light" style="text-decoration: none;">{{ __('main.portfolio') }}
                            <div class="d-flex w-100 align-items-center line-b-mo"><span class="line-b-moo"></span></div>
                            </a>
                        </li>
                        <li class="nav-item px-3 lin-mo">
                            <a href="/jobs" class="item-a text-white text-fut-bold sf-light" style="text-decoration: none;">{{ __('main.vacancy') }}
                            <div class="d-flex w-100 align-items-center line-b-mo"><span class="line-b-moo"></span></div>
                            </a>
                        </li>
                        <li class="nav-item px-3 lin-mo">
                            <a href="/contact" class="item-a text-white text-fut-bold sf-light" style="text-decoration: none;">{{ __('main.contact') }}
                            <div class="d-flex w-100 align-items-center line-b-mo"><span class="line-b-moo"></span></div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 collapse navbar-collapse">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav">
                        {{--<li class="nav-item px-1">--}}
                            {{--<a href="#" class="text-white text-fut-bold sf-bold" style="text-decoration: none;">En</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item px-1">--}}
                            {{--<a href="#" class="text-white text-fut-bold sf-bold" style="text-decoration: none;">Ru</a>--}}
                        {{--</li>--}}

                        <li class="nav-item px-3 item-m">
                            <a class="item-a text-white text-fut-bold sf-light" style="text-decoration: none;" href="{{ route('set.language', App::isLocale('en') ? 'ru' : 'en') }}" id="">
                                {{ strtoupper(App::isLocale('en') ? 'ru' : 'en') }}
                            </a>
                        </li>
                        <li class="nav-item px-5">

                            <a class="text-white text-fut-bold" style="text-decoration: none;cursor: pointer;">
                                <img class="hover-mo w-75" src="{{ asset('images/humburger.png') }}" alt="" onclick="openNav()">
                            </a>
                        </li>
                    </ul>
<div style="background-image: linear-gradient(-90deg, #30105e7a, #17131d7d);height: 92px;width: 50px;top: -50px;position: absolute;z-index: -1;    right: 53px;"></div>
                </nav>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-xl py-0 w-100 pr-0 bg-white other-menu" style="z-index: 999; background: black!important; position: fixed;">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-4 col-6 px-4 py-2">
                <a href="/">
                    <h2 class="text-white logo sf-black mb-0" style="font-size: 35px; line-height: 30px; letter-spacing: 0.05em; text-transform: uppercase;">
                        .MOORE
                    </h2>
                </a>
            </div>
            <div class="col-auto my-auto ml-auto d-xl-none px-0">
                    <span class="nav-item px-3 item-m">
                            <a class="item-a text-white text-fut-bold sf-light" style="text-decoration: none;" href="{{ route('set.language', App::isLocale('en') ? 'ru' : 'en') }}" id="">
                                {{ strtoupper(App::isLocale('en') ? 'ru' : 'en') }}
                            </a>
                        </span>
                <button class="text-white navbar-toggler w-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <img class="w-75" src="{{ asset('images/humburger.png') }}" alt="">
                </button>
            </div>
            <div class="collapse navbar-collapse col-md-11 col-8"  id="navbarSupportedContent">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item p-2">
                            <a href="/" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">{{ __('main.main') }}</a>
                        </li>
                        <li class="nav-item p-2 ">
                            <a href="/portfolio_queue" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">{{ __('main.portfolio') }}</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="/jobs" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">{{ __('main.vacancy') }}</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="#" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">{{ __('main.contact') }}</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
<div id="mySidenav" class="sidenav d-md-block d-none">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="sf-medium pl-5 item-min-b" href="/jobs">{{ __('main.vacancy') }}</a>
    <a class="sf-medium pl-5 item-min-b" href="/portfolio_queue">{{ __('main.portfolio') }}</a>
    <a class="sf-medium pl-5 item-min-b" href="tel: +996 709 111 143"> +996 709 111 143</a>
    <a class="sf-medium pl-5 item-min-b" href="tel: +996 771 044 429">+996 771 044 429</a>
    <a class="sf-medium pl-5 item-min-b" href="mailto: info@to-moore.com">info@to-moore.com</a>
    <div class="container-fluid pt-5 pl-4 ml-2">
        <div class="row">

            <div class="col-3 p-0">
                <a href="https://www.behance.net/moore_studio" class="ics" target="_blank">
                    <p>
                <i class="fab fa-behance fa-sm"></i>
                    </p>
                </a>
            </div>

            <div class="col-3 p-0">
                <a href="https://www.instagram.com/moore_studio/" class="ics" target="_blank">
                    <p>
                    <i class="fab fa-instagram fa-sm"></i>
                    </p>
                </a>
            </div>

            <div class="col-3 p-0">
                <a href="#" class="ics">
                    <p>
                    <i class="fab fa-facebook-f fa-sm"></i>
                    </p>
                </a>
            </div>
        </div>
    </div>

    <img class="w-100" style="margin-top: 17%;" src="{{ asset('images/wedo.png') }}" alt="">
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139005514-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139005514-1');
</script>
