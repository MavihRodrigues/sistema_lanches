<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required|max:255',
        'cpf' => 'required|max:13|unique:funcionario',
        'email' => 'required|max:255',
        'senha' => 'required|max:255',
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.max' => 'O limite máximo de caracteres é 255',
        'cpf.required' => 'O campo ingredientes é obrigatório',
        'cpf.max' => 'O limite máximo de caracteres é 255',
        'cpf.unique' => 'Este cpf já existe',
        'email.required' => 'O campo email é obrigatório',
        'email.max' => 'O limite máximo de caracteres é 255',
        'senha.required' => 'O campo senha é obrigatório',
        'senha.max' => 'O limite máximo de caracteres é 255',
    ];

    public function render()
    {
        return view('livewire.funcionario.create');
    }

    public function store()
    {
        $this->validate();
        Funcionario::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => $this->senha,
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
