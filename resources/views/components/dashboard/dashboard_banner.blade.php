<section class="dashboard-banner-area default-flex-between">
    <div class="dashboard-banner-left-area default-flex-column">
        <div class="dashboard-banner-top-left">
            <p>{{$date}}</p>
        </div>


        <div class="dashboard-banner-bottom-left default-flex-column">
            <h2>Bem-Vindo {{$user->name}}</h2>
            <p>Estude de qualquer lugar, em qualquer hora aqui na Saber Online</p>
        </div>

    </div>

    <div class="dashboard-banner-right-area default-flex">
        <img class="scholarcap-icon" src="{{url('/assets/images/layout-images/dashboard-scholarcap-icon.png')}}" alt="">
        <img src="{{url('/assets/images/layout-images/dashboard-banner-icon.png')}}" alt="">
        <img class="backpack-icon" src="{{url('/assets/images/layout-images/dashboard-backpack-icon.png')}}" alt="">
    </div>
</section>
