<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\UserType;
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
        // $user = User::factory()->create([
        //     'name' => 'John Doe'
        // ]);

        // Post::factory(5)->create([
        //     'user_id' => $user->id
        // ]);

        UserType::factory()->create([
            'user_type_name'     => 'General User',
            'user_type_variable' => 'generalUser',
        ]);
    }
}
