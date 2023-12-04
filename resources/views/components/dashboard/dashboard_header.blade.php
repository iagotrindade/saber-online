<header class="dashboard-header default-flex-between">
    <div class="header-left-area">
        <livewire:dashboard-search/>
    </div>

    <div class="header-right-area default-flex">
            <livewire:notification-area :user="$user"/>
        <a href="" class="header-profile-area default-flex">
            <img src="{{url($user->image->name)}}" alt="Imagem do Usuário">

            <div class="header-profile-texts default-flex-column">
                <h3>{{$user->name}}</h3>
                <p>{{$user->permissionGroup->name}}</p>
            </div>

        </a>

    </div>


</header>


