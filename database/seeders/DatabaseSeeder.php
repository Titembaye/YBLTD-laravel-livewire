<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
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
        // \App\Models\User::factory(10)->create();
        $this->call(TypeArticleSeeder::class);
        Article::factory(50)->create();
        Client::factory(50)->create();
        $this->call(DureeLocationSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(StatutLocationSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
