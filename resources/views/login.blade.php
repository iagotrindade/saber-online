<x-auth.auth_layout title="Bem - Vindo a plataforma Saber Online" pageTitle="Saber Online - Login">
    <div class="login-form-social-media-area default-flex-between">
        <a class="social-media-item default-flex" href="">
                <i class='bx bxl-instagram'></i>

                <p>Instagram</p>
        </a>


        <a class="social-media-item default-flex" href="">
            <i class='bx bxl-facebook-square' ></i>

            <p>Facebook</p>
        </a>

    </div>

    <form action="{{route('login.action')}}" method="POST">
        @csrf

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="warning-item">{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="login-input-area default-flex-column">
            <label class="login-label" for="email">Email</label>
            <input type="text" name="email" id="email">

            <label class="login-label" for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>


        <div class="default-flex-between">
            <div class="default-flex">
                <input class="login-remember-input" type="checkbox" id="remember" name="remember">

                <label class="login-label" for="remember">Lembrar de mim</label>
            </div>


            <x-buttons.default_submit_button title="Entrar"></x-buttons.default_submit_button>
        </div>
    </form>

    <p class="auth-footer-text">Esqueceu sua senha? <a class="auth-footer-link" href="{{route('forgot.password')}}">CLIQUE AQUI</a></p>
</x-auth.auth_layout>
