<?php

namespace Database\Seeders;

use App\Models\Intention;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createUserAdmin();
        $this->createUsersWithRelations();
    }

    public function createUserAdmin()
    {
        return User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);
    }

    public function createUsersWithRelations()
    {
        return User::factory(3)
            ->hasAddress()
            ->has(
                Intention::factory(5)
                    ->hasProducts(3),
                'intentions'
            )
            ->create();
    }
}
