<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // $this->call([
        //     PostSeeder::class,
        // ]);
        $this->call([
            ArticleSeeder::class,
        ]);

    }
}
