<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;

    protected $rules = [
        'nome' => 'required|max:255',
        'ingredientes' => 'required|max:255',
        'valor' => 'required',
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.max' => 'O limite máximo de caracteres é 255',
        'ingredientes.required' => 'O campo ingredientes é obrigatório',
        'ingredientes.max' => 'O limite máximo de caracteres é 255',
        'valor.required' => 'O campo valor é obrigatório',
    ];


    public function render()
    {
        return view('livewire.produto.create');
    }

    public function store()
    {
        $this->validate();
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
