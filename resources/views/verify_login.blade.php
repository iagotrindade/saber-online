<x-auth.auth_layout title="Digite abaixo seu código de verificação" pageTitle="Confirmar Login">

    <form method="POST" action="{{route('verify.login.action')}}" class="verification-code-input default-flex-column">
        <div class="verify-code-input-area">
            @csrf
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="warning-item">{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <input type="hidden" name="userId" value="{{$userId}}">
            <input type="text" maxlength="1" pattern="\d" inputmode="numeric" name="code[]"/>
            <input type="text" maxlength="1" pattern="\d" inputmode="numeric" name="code[]"/>
            <input type="text" maxlength="1" pattern="\d" inputmode="numeric" name="code[]"/>
            <input type="text" maxlength="1" pattern="\d" inputmode="numeric" name="code[]"/>
            <input type="text" maxlength="1" pattern="\d" inputmode="numeric" name="code[]"/>
            <input type="text" maxlength="1" pattern="\d" inputmode="numeric" name="code[]"/>
        </div>

        <x-buttons.default_submit_button title="Enviar"></x-buttons.default_submit_button>
    </form>

    <p class="auth-footer-text">Esqueceu sua senha? <a class="auth-footer-link" href="forgot_password">CLIQUE AQUI</a></p>

    <script>
        document.addEventListener('input', function (e) {
            const input = e.target;
            if (input.maxLength === input.value.length) {
                const nextInput = input.nextElementSibling;
                if (nextInput) {
                    nextInput.focus();
                }
            }
        });
    </script>
</x-auth.auth_layout>
