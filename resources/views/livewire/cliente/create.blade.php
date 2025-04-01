<div>
    <div class="mt-5">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card col-md-7 mx-auto">
            <h5 class="card-header">Cadastro de Clientes</h5>

            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="input" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="Ex.: Vitor Almeida" wire:model.defer="nome">
                        @error('nome')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco"
                            placeholder="Ex.: Rua São Paulo, 27-26" wire:model.defer="endereco">
                        @error('endereco')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            placeholder="Ex.: 1898143-6475" wire:model.defer="telefone">
                        @error('telefone')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf"
                            placeholder="Ex.: 1234567890123" wire:model.defer="cpf">
                        @error('cpf')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Ex.: almeida@vitor.com" wire:model.defer="email">
                        @error('email')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Ex.: 123456" wire:model.defer="password">
                        @error('senha')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-2 mx-auto">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
