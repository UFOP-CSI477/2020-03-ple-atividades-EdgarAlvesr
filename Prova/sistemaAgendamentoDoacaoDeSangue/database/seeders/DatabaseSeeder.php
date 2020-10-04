<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pessoa::factory()->times(3)->hasAgendamentos(2)->create();
        \App\Models\Coleta::factory()->times(3)->hasAgendamentos(2)->create();
        \App\Models\User::factory(2)->create();
    }
}
