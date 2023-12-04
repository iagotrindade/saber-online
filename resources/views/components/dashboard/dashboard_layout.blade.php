<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
        @livewireStyles
        <title>Saber Online - {{$pageTitle}}</title>
    </head>

    <body class="login-body">
        <div class="dashboard-content">
            <x-dashboard.dashboard_header :user="$user"></x-dashboard.dashboard_header>
            {{$slot}}
        </div>

        <aside>
            <x-dashboard.dashboard_sidebar></x-dashboard.dashboard_sidebar>
        </aside>

        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @livewireScripts

        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 6,
                spaceBetween: 30,
                loop: true,
                navigation: {
                nextEl: ".swiper-button-next",
            },
                mousewheel: true,
                keyboard: true,
            });
        </script>
    </body>
</html>
