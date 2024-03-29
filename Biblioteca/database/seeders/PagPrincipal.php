<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Principal;

class Pagprincipal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //rode ao menos uma vez esse seeder.
        Principal::factory(1)->create();
        Principal::factory()->create([
                 'nomeitem'=>'relatorio',
         ]);
    }
}
