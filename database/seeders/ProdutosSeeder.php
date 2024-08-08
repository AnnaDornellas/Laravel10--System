<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{

    public function run(): void
    {
       Produto::create(
        [
            'nome' => 'Anna Júlia',
            'valor' => '30.00' ,
       ]
       );
    }
}