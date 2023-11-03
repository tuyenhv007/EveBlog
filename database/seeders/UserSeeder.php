<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->firstOrCreate([
            'email' => 'moderator@filament.com'
        ], [
            'name' => 'Moderator',
            'password' => Hash::make('easyric')
        ]);
        $user->assignRole('moderator');
    }
}
