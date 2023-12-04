<div class="sidebar default-flex-column-start">
    <!-- Conteúdo da barra lateral -->
    <div class="dashboard-main-icon-area default-flex">
        <a href="{{route('dashboard')}}">
            <img src="{{url('assets/images/layout-images/dashboard-sidebar-icon.png')}}" alt="ícone da Barra Lateral">
        </a>
    </div>

    <ul class="sidebar-menu default-flex-column">
        <li>
            <a href="{{route('dashboard')}}" class="sidebar-item default-flex menu-active">
                <i class='sidebar-item-icon bx bx-home'></i>
                <p class="sidebar-item-text" href="#">Dashboard</p>
            </a>
        </li>

        <li>
            <a href="" class="sidebar-item default-flex">
                <i class='sidebar-item-icon bx bxs-graduation' ></i>
                <p class="sidebar-item-text" href="#">Cursos</p>
            </a>
        </li>

        <li>
            <a href="" class="sidebar-item default-flex">
                <i class='sidebar-item-icon bx bx-note'></i>
                <p class="sidebar-item-text" href="#">Anotações</p>
            </a>
        </li>

        <li>
            <a href="" class="sidebar-item default-flex">
                <i class='sidebar-item-icon bx bxs-quote-alt-left'></i>
                <p class="sidebar-item-text" href="#">Fórum</p>
            </a>
        </li>

        <li>
            <a href="" class="sidebar-item default-flex">
                <i class='sidebar-item-icon bx bxs-user'></i>
                <p class="sidebar-item-text" href="#">Perfil</p>
            </a>
        </li>

        <li>
            <a href="" class="sidebar-item default-flex">
                <i class='sidebar-item-icon bx bx-support'></i>
                <p class="sidebar-item-text" href="#">Suporte</p>
            </a>
        </li>

        <li>
            <a href="{{route('logout')}}" class="sidebar-item default-flex">
                <i class='sidebar-item-icon bx bx-log-out'></i>
                <p class="sidebar-item-text" href="#">Sair</p>
            </a>
        </li>
    </ul>
</div>
