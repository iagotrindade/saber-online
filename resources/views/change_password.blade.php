<x-auth.auth_layout title="Estamos quase lá, é só escolher uma nova senha" pageTitle="Mudar Senha">
    <h3 class="reset-password-warning">Para alterar sua senha preencha os campos abaixo</h3>

    <form action="{{route('password.reset.action')}}" method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="warning-item">{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="login-input-area default-flex-column">
            <input type="hidden" name="token" id="token" value="{{$token}}">

            <label class="login-label" for="email" required>Email</label>
            <input type="email" name="email" id="email">

            <label class="login-label" for="password" required>Senha</label>
            <input type="password" name="password" id="password">

            <label class="login-label" for="password_confirmation" required>Repita a Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation">

            <x-buttons.default_submit_button title="Enviar"></x-buttons.default_submit_button>
        </div>
    </form>

    <p class="auth-footer-text">Lembrou suas credenciais? <a class="auth-footer-link" href="{{route('login')}}">CLIQUE AQUI</a></p>
</x-auth.auth_layout>
