<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
            'staff_id'=>'VN433',
            'department'=>'IT',
            'department_head'=>'Suwat',
            'user_level'=>'1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        // User
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@test.com',
            'staff_id'=>'user',
            'department'=>'test',
            'department_head'=>'VN433',
            'user_level'=>'staff',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        // Advance User
        \App\Models\User::factory()->create([
            'name' => 'useradv',
            'email' => 'useradv@test.com',
            'staff_id'=>'useradv',
            'department'=>'test',
            'department_head'=>'VN433',
            'user_level'=>'staff',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        // KM Manager
        \App\Models\User::factory()->create([
            'name' => 'managerkm',
            'email' => 'managerkm@test.com',
            'staff_id'=>'managerkm',
            'department'=>'test',
            'department_head'=>'VN433',
            'user_level'=>'staff',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        // Training Manager
        \App\Models\User::factory()->create([
            'name' => 'managertr',
            'email' => 'managertr@test.com',
            'staff_id'=>'managertr',
            'department'=>'test',
            'department_head'=>'VN433',
            'user_level'=>'staff',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        // MD
        \App\Models\User::factory()->create([
            'name' => 'md',
            'email' => 'md@test.com',
            'staff_id'=>'md',
            'department'=>'test',
            'department_head'=>'VN433',
            'user_level'=>'staff',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        // Admin
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'staff_id'=>'admin',
            'department'=>'test',
            'department_head'=>'VN433',
            'user_level'=>'staff',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
