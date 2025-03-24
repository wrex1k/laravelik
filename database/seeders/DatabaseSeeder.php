<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            NotesTableSeeder::class,
            NoteCategoryTableSeeder::class,
        ]);

        // Vytvorí 10 kategórií
        $categories = Category::factory(10)->create();
    }
}
