<div>
    <div class="mt-5">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card col-md-5 mx-auto">
            <h5 class="card-header">Cadastro de Produtos</h5>

            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="input" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="Ex.: Hambúrguer" wire:model.defer="nome">
                        @error('nome')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input" class="form-label">Ingredientes</label>
                        <input type="text" class="form-control" id="ingredientes" name="ingredientes"
                            placeholder="Ex.: 2 Pães, 1 hambúrguer, 1 salsicha..." wire:model.defer="ingredientes">
                        @error('ingredientes')
                            <span class="text-warning small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="valor" name="valor"
                            wire:model.defer="valor">
                        @error('valor')
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
