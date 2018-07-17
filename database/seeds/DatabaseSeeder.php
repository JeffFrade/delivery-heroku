<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // Chamando a Classe de Seeders da Tabela Customer:
        $this->call(CustomersTableSeeder::class);
    }
}
