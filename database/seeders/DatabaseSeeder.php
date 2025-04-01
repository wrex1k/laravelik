<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Note;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
        $this->call([
            UsersTableSeeder::class,
            // Zvyšné seedery nepotrebujeme...
        ]);
    
        $users = User::all();
        $notes = Note::factory(20)->create();
        $categories = Category::factory(10)->create();
    
        $notes->each(function ($note) use ($categories) {
            $note->categories()->attach(
                $categories->random(rand(2, 3))->pluck('id')->toArray()
            );
        });
    
        $notes->each(function ($note, $index) use ($users) {
            $user = $users[$index % $users->count()];
            $user->notes()->save($note);
        });
    }
}
