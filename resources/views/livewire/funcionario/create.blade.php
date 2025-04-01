<div>
    <div>
        <div class="mt-5">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card col-md-5 mx-auto">
                <h5 class="card-header">Cadastro de Funcionários</h5>

                <div class="card-body">
                    <form wire:submit.prevent="store">
                        <div class="mb-3">
                            <label for="input" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                placeholder="Ex.: Harry" wire:model.defer="nome">
                            @error('nome')
                                <span class="text-warning small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="input" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf"
                                wire:model.defer="cpf">
                            @error('cpf')
                                <span class="text-warning small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="input" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                wire:model.defer="email">
                            @error('email')
                                <span class="text-warning small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="input" class="form-label">Senha</label>
                            <input type="text" class="form-control" id="senha" name="senha"
                                wire:model.defer="senha">
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

</div>
