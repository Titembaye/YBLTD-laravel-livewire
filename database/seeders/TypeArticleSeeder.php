<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_articles')->insert([
            ["nom" => "immobilier"],
            ["nom" => "voiture"],
            ["nom" => "materiel electronique"],
            ["nom" => "salle"],
        ]);
    }
}
