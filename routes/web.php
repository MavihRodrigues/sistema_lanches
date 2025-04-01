<?php

use App\Livewire\Cliente\Create;
use App\Livewire\Produto\Create as ProdutoCreate;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

Route::get('/cliente/create', Create::class);

Route::get('/produto/create', ProdutoCreate::class);
