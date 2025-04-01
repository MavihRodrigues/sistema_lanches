<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;

    protected $rules = [
        'nome' => 'required|min:3|max:255',
        'endereco' => 'required|min:4|max:255',
        'telefone' => 'required|min:13|max:13',
        'cpf' => 'required|min:20|max:20|unique:clientes',
        'email' => 'required|email|min:6|max:255',
        'password' => 'required|min:6|max:255',
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.min' => 'O limite mínimo de caracteres é 3',
        'nome.max' => 'O limite máximo de caracteres é 255',
        'endereco.required' => 'O campo endereco é Obrigatório',
        'endereco.min' => 'O limite mínimo de caracteres é 4',
        'endereco.max' => 'O limite máximo de caracteres é 255',
        'telefone.required' => 'O campo telefone é Obrigatório',
        'telefone.min' => 'O limite mínimo de caracteres é 13',
        'telefone.max' => 'O limite máximo de caracteres é 13',
        'cpf.required' => 'O campo cpf é obrigatório',
        'cpf.min' => 'O limite mínimo de caracteres é 20',
        'cpf.max' => 'O limite máximo de caracteres é 20',
        'cpf.unique' => 'Campo preenchido incorretamente',
        'email.required' => 'O campo email é obrigatório',
        'email.min' => 'O limite mínimo de caracteres é 6',
        'email.max' => 'O limite máximo de caracteres é 255',
        'email.email' => 'O formato de email está incorreto',
        'password.required' => 'O campo senha é obrigatório',
        'password.min' => 'O limite mínimo de caracteres é 6',
        'password.max' => 'O limite máximo de caracteres é 255',
    ];


    public function render()
    {
        return view('livewire.cliente.create');
    }

    public function store()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'cliente'
        ]);

        Cliente::create([
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
