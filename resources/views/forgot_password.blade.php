<x-auth.auth_layout title="Acredite, isso acontece com todo mundo :)" pageTitle="Esqueci Minha Senha">
    <h3 class="reset-password-warning">Digite seu email abaixo e nós vamos te ajudar a recuperar sua senha</h3>

    <form action="{{route('forgot.password.action')}}" method="POST">
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
            <input type="email" name="email" id="email" required>

            <x-buttons.default_submit_button title="Enviar"></x-buttons.default_submit_button>
        </div>
    </form>

    <p class="auth-footer-text">Lembrou sua senha? <a class="auth-footer-link" href="login">CLIQUE AQUI</a></p>
</x-auth.auth_layout>
