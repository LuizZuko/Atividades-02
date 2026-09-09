<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('alunos')->insert([
            [
                'nome' => 'João Silva',
                'email' => 'joao@gmail.com'
            ],
            [
                'nome' => 'Maria Souza',
                'email' => 'maria@gmail.com'
            ],
            [
                'nome' => 'Pedro Santos',
                'email' => 'pedro@gmail.com'
            ],
            [
                'nome' => 'Ana Oliveira',
                'email' => 'ana@gmail.com'
            ],
            [
                'nome' => 'Lucas Pereira',
                'email' => 'lucas@gmail.com'
            ],
            [
                'nome' => 'Juliana Costa',
                'email' => 'juliana@gmail.com'
            ],
            [
                'nome' => 'Carlos Rodrigues',
                'email' => 'carlos@gmail.com'
            ],
            [
                'nome' => 'Beatriz Lima',
                'email' => 'beatriz@gmail.com'
            ],
            [
                'nome' => 'Rafael Martins',
                'email' => 'rafael@gmail.com'
            ],
            [
                'nome' => 'Larissa Alves',
                'email' => 'larissa@gmail.com'
            ],
        ]);
    }
}