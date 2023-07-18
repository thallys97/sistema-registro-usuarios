<x-layout title="Novo usuário">
    <form method="post">
        @csrf
        <div class="form-group mb-4">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group mb-4">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group mb-4">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group mb-4">
            <label for="password_confirmation" class="form-label">Confirme a senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>

        <div class="d-flex">
            <button class="btn btn-primary mt-3 me-2 ">
                Registrar
            </button>

            <a href="{{ route('login') }}" class="btn btn-secondary mt-3">voltar para o login</a>
        </div>

    </form>
</x-layout>