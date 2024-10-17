<?php

namespace Database\Seeders;

use App\Models\Organizer;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Max Mustermann',
            'email' => 'max.mustermann@example.com',
            'password' => '123456'
        ]);
        Organizer::create(['name' => 'ACME', 'user_id' => $user->id]);
    }
}
