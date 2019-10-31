<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>.MOORE STUDIO - Разработка web cайтав и продвижение в Бишкеке</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ asset('css/animate.css') }}">--}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <meta name="description" content="Мы занимаемся созданием сайтов и интерфейсов,брэндингом, придумываем рекламу и развиваем проекты в digital." />
    <!-- Styles -->
<style>
.preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            /*background-color:grey;*/
            /*background-image: url('https://to-moore.com/images/beeline.png');*/
            background-repeat: no-repeat;
            background-color: #130f19;
            background-position: center;
        }
        @media screen and (min-width: 300px) and (max-width: 700px) {
            .preloader
            {
                background-size:80%;
            }
        }
        
.lines {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 100%;
  margin: auto;
  width: 90vw;
}
.lines .line {
  position: absolute;
  width: 1px;
  height: 100%;
  top: 0;
  left: 50%;
  background: rgba(255, 255, 255, 0.16);
  overflow: hidden;
}
.lines .line::after {
  content: "";
  display: block;
  position: absolute;
  height: 15vh;
  width: 100%;
  top: -50%;
  left: 0;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #ffffff 75%, #ffffff 100%);
  -webkit-animation: run 3s 0s infinite;
          animation: run 3s 0s infinite;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-timing-function: cubic-bezier(0.4, 0, 1, 1);
          animation-timing-function: cubic-bezier(0.4, 0, 1, 1);
}
.lines .line:nth-child(1) {
  margin-left: -25%;
}
.lines .line:nth-child(1)::after {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
.lines .line:nth-child(3) {
  margin-left: 25%;
}
.lines .line:nth-child(3)::after {
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
}

@-webkit-keyframes run {
  0% {
    top: -50%;
  }
  100% {
    top: 110%;
  }
}

@keyframes run {
  0% {
    top: -50%;
  }
  100% {
    top: 110%;
  }
}


</style>
</head>
<body>
    <div class="preloader"><div class="lines">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
  </div></div>
@include('_partials.header')
@yield('content')
@include('_partials.footer')
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var height = $('.logo').height();
            var scrollTop = $(window).scrollTop();

            if (scrollTop >= height - 5) {
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('shadow');
                $('.menuse').removeClass('py-5');
                $('.menuse').addClass('py-2');

            } else {
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('shadow');
                $('.menuse').removeClass('py-2');
                $('.menuse').addClass('py-5');
            }

        });
    });
</script>
<script>
    AOS.init();
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.right = "0px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.right = "-300px";
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139005514-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139005514-1');
</script>



<script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=dee301a5db2a0b9ea6ff326260216db7" charset="UTF-8"></script>
<script>
    function preloader() {
        $('.preloader').fadeOut('slow').delay(10000);
    };
</script>
<script>
setTimeout(preloader, 2500);
</script>
    <script>
        function oli() {
            $('.oli').removeClass('mo-color');
            $('.ears').removeClass('mo-ears');
        }
    </script>
    <script>
        $('.oli').on('click', function () {
            $('.oli').addClass('mo-color');
            $('.ears').addClass('mo-ears');
            setTimeout(oli, 500);
        })
    </script>

@stack('scripts')
</body>
</html>
