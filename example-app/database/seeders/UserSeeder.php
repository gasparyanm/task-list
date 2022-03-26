<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $currentUser = User::create([
             'name' => 'John Doe',
             'email' => 'test@test.com',
             'password' => bcrypt('123456'),
         ]);

        User::factory(3)
            ->has(
                Task::factory()
                    ->count(3)
                    ->state(function (array $attributes, User $user) use($currentUser) {
                        return ['assigned_id' => $currentUser->id];
                    })
            )
            ->create();

    }
}
